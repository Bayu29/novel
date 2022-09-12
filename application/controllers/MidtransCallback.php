<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MidtransCallback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Setting_web_model');
		$this->load->model('Mutasi_saldo_model');
		$this->load->model('Deposit_model');
    }

	public function handle()
	{
		$json = file_get_contents('php://input');

		$data = json_decode($json);

		$setting = $this->Setting_web_model->get_by_id(1);

		$orderId = $data->order_id;
		$statusCode = $data->status_code;
		$grossAmount = $data->gross_amount;
		$serverKey = $setting->server_key_midtrans;
		$input = $orderId.$statusCode.$grossAmount.$serverKey;
		$signature = openssl_digest($input, 'sha512');
		
		if ($data->signature_key == $signature) {
			try {
				$this->db->where('deposit_reference', $data->order_id);
				$deposit = $this->db->get('deposit')->row();

				if ($deposit->status == 'success') {
					exit;
				}

				$payment_code = '';
				$payed_at = null;

				if ($data->transaction_status == 'capture' || $data->transaction_status == 'settlement') {
					$status = 'success';
					$payed_at = date('Y-m-d H:i:s');
				} elseif ($data->transaction_status == 'pending' || $data->transaction_status == 'authorize') {
					$status = 'pending';
				} elseif ($data->transaction_status == 'deny') {
					$status = 'failed';
				} elseif ($data->transaction_status == 'expire') {
					$status = 'expired';
				} elseif ($data->transaction_status == 'cancel') {
					$status = 'canceled';
				} elseif ($data->transaction_status == 'refund' || $data->transaction_status == 'partial_refund') {
					$status = 'refunded';
				}

				if ($data->payment_type == 'bank_transfer') {
					if (!isset($data->permata_va_number)) {
						$metode_pembayaran = $data->va_numbers->bank.' virtual account';
						$payment_code = $data->va_numbers->va_number;
					} else {
						$metode_pembayaran = 'permata virtual account';
						$payment_code = $data->permata_va_number;
					} 
				} elseif ($data->payment_type == 'cstore') {
					$metode_pembayaran = $data->store;
					$payment_code = $data->payment_code;
				} else {
					$metode_pembayaran = str_replace('_', '', $data->payment_type);
				}

				$payload_data = [
					'metode_pembayaran' => $metode_pembayaran,
					'kode_bayar' => $payment_code,
					'status' => $status,
					'payed_at' => $payed_at,
				];

				$payload_data['metode_pembayaran'] = $metode_pembayaran;
				$payload_data['kode_bayar'] = $payment_code;
				$payload_data['status'] = $status;

				if ($status == 'success') {
					$payload_data['payed_at'] = $payed_at;
				}

				$this->Deposit_model->update($deposit->deposit_id, $payload_data);

				$user = $this->User_model->get_by_id($deposit->user_id);
				
				if ($status == 'success') {
					$saldo = intval($user->saldo) + intval($grossAmount);

					$this->User_model->update($user->user_id, [
						'saldo' => $saldo,
					]);

					$this->Mutasi_saldo_model->insert([
						'user_id' => $user->user_id,
						'nominal' => $grossAmount,
						'saldo' => $saldo,
						'catatan' => 'Penambahan saldo dari deposit #'.$deposit->id,
						'type' => 'credit',
						'trx_id' => $deposit->deposit_id,
					]);
				}

				echo json_encode(['success' => true]);
			} catch (\Exception $e) {
				throw new Exception('failed updated status deposit');
			}
		}
	}
}

