<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class User_profile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		check_login_member();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
		$this->load->model('User_model');
		$this->load->model('Setting_web_model');
		$this->load->model('Deposit_model');
		$this->load->model('Member_model');
    }

	public function index()
	{	
		$user = $this->session->userdata('user');
		$user = $this->Member_model->get_by_id($user->member_id);
		
		/** Deposit */
		$this->db->where('user_id', $user->member_id);
		$this->db->order_by('deposit_id', 'desc');
		$deposit = $this->db->get('deposit')->result();

		/**
		 * Mutasi
		 */
		$this->db->where('user_id', $user->member_id);
		$this->db->order_by('mutasi_saldo_id', 'desc');
		$mutasi = $this->db->get('mutasi_saldo')->result();

		/** Pembelian chapter */
		// $this->db->join('member', 'member.member_id = pembelian_chapter.member_id');
		$this->db->join('novel_chapter', 'novel_chapter.novel_chapter_id = pembelian_chapter.novel_chapter_id');
		$this->db->join('novel', 'novel.novel_id = novel_chapter.novel_id');
		$this->db->where('member_id', $user->member_id);
		$this->db->order_by('pembelian_chapter_id', 'desc');
		$pembelian_chapter = $this->db->get('pembelian_chapter')->result();


		$data['user'] = $user;
		$data['deposit'] = $deposit;
		$data['mutasi'] = $mutasi;
		$data['pembelian_chapter'] = $pembelian_chapter;
 		$this->template->load('template_web','web/profile', $data);
	} 

	public function deposit()
	{
		$setting = $this->Setting_web_model->get_by_id(1);

		$user = $this->session->userdata('user');
		$user = $this->Member_model->get_by_id($user->member_id);
		
		if (!$user) {
			//$this->session->set_flashdata('error', 'Gagal Melakukan deposit');
			echo json_encode(['success' => false, 'message' => 'Gagal Melakukan deposit']);
			exit;
		}
		
		$nominal = $this->input->post('nominal', true);

		$deposit = $this->Deposit_model->insert([
			'user_id' => $user->member_id,
			'nominal' => $nominal,
			'expired_at' => date('y-m-d H:i:s'),
		]);

		$deposit_id = $this->db->insert_id();

		$deposit_reference = $this->Deposit_model->generate_reference($deposit_id, 5);

		$update_deposit = $this->Deposit_model->update($deposit_id, [
			'deposit_reference' => $deposit_reference,
			'note' => 'Deposit #'.$deposit_id.' sebesar Rp.'.number_format($nominal,0, '.', '.').' Pending',
		]);


		$auth_string = base64_encode($setting->server_key_midtrans.':');
		
		$header = [
            'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Basic '.$auth_string
        ];

		$url = 'https://app.sandbox.midtrans.com/snap/v1/transactions';

		$payload = [
			'transaction_details' => [
				"order_id" => $deposit_reference,
				'gross_amount' => $nominal
			],
			'item_detail' => [
				'id' => $deposit_reference,
				'price' => $nominal,
				'quantity' => 1,
				'name' => 'Deposit '.$setting->nama_website.' #'.$deposit_reference,
				'brand' => $setting->nama_website,
				'merchant_name' => $setting->nama_website,
			],
			'customer_details' => [
				'first_name' => $user->nama,
				'last_name' => $user->nama,
				'email' => $user->email,
				'phone' => $user->no_hp
			]
		];

		$data_payload = json_encode($payload); 

		$curl = curl_init();
        curl_setopt($curl,CURLOPT_FRESH_CONNECT,true);
        curl_setopt($curl,CURLOPT_URL,$url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_HEADER,false);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$header);
        curl_setopt($curl,CURLOPT_FAILONERROR,false);
        curl_setopt($curl,CURLOPT_POST,true);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$data_payload);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

        $result = curl_exec($curl);
        $error  = curl_error($curl);
        $errno  = curl_errno($curl);
        curl_close($curl);

		$result = json_decode($result);

		if ($errno) {
			echo json_encode(['success' => false, 'message' => 'Gagal melakukan deposit']);
			exit;
		} else {
			echo json_encode(['token' => $result->token]);
		}
	}

	public function detail($id)
	{
		$this->template->load('template_web', 'web/detail');
	}

	public function login()
	{
		$this->template->load('template_web','web/login');
	}

	public function register()
	{
		$this->template->load('template_web','web/register');
	}

	public function apk()
	{
		$this->template->load('template_web','web/apk');
	}

	public function kontak()
	{
		$this->template->load('template_web','web/kontak');
	}

}
