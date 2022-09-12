<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Deposit extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Deposit_model');
		$this->load->model('Setting_web_model');
		$this->load->model('User_model');
		$this->load->model('Mutasi_saldo_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $deposit = $this->Deposit_model->get_all();
        $data = array(
            'deposits' => $deposit,
        );
        $this->template->load('template','deposit/deposit_list', $data);
    }

	public function detail($id)
	{
		$deposit = $this->Deposit_model->get_by_id($id);

		$data['deposit'] = $deposit;

		$this->template->load('template', 'deposit/detail', $data);
	}

	public function change_status($id)
	{
		$deposit = $this->Deposit_model->get_by_id($id);
		$user = $this->User_model->get_by_id($deposit->user_id);

		$status = $this->input->post('status', true);

		try {
			if ($deposit->status == 'pending' && $status == 'success'){
				$deposit_update = $this->Deposit_model->update($deposit->deposit_id, [
					'status' => 'success',
					'catatan' => 'Deposit #'.$deposit->deposit_reference,
				]);

				$saldo = intval($user->saldo) + intval($deposit->nominal);

				$user_update = $this->User_model->update($deposit->user_id, [
					'saldo' => $saldo,
				]);

				$mutasi = $this->Mutasi_saldo_model->insert([
						'user_id' => $user->user_id,
						'nominal' => $deposit->nominal,
						'saldo' => $saldo,
						'catatan' => 'Penambahan saldo dari deposit #'.$deposit->deposit_id,
						'type' => 'credit',
						'trx_id' => $deposit->deposit_id,
					]);
			} 

			if ($status == 'failed') {
				$deposit_update = $this->Deposit_model->update($deposit->deposit_id, [
					'status' => 'failed',
					'catatan' => 'Deposit #'.$deposit->deposit_id.' gagal',
				]);
			} elseif ($status == 'refunded') {
				$deposit_update = $this->Deposit_model->update($deposit->deposit_id, [
					'status' => 'refunded',
					'catatan' => $this->input->post('catatan')
				]);
			}
			$this->session->set_flasdata('success', 'Berhasil mengupdate status deposit');

			redirect(site_url('deposit/detail/'.$id));
		} catch(\Exception $e) {
			$this->session->set_flashdata('error', 'Gagal mengupdate status deposit');

			redirect(site_url('deposit/detail/'.$id));
		}
	}
}
