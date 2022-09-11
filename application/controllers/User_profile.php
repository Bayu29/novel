<?php

use LDAP\Result;

defined('BASEPATH') OR exit('No direct script access allowed');


class User_profile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
		$this->load->model('User_model');
		$this->load->model('Setting_web_model');
		$this->load->model('Deposit_model');
    }

	public function index()
	{	
		$user_id = $this->session->userdata('userid');
		$user = $this->User_model->get_by_id($user_id);

		$data['user'] = $user;
		$this->template->load('template_web','web/profile', $data);
	} 

	public function deposit()
	{
		$setting = $this->Setting_web_model->get_by_id(1);

		$user_id = $this->session->userdata('userid');
		$user = $this->User_model->get_by_id($user_id);
		
		if (!$user) {
			//$this->session->set_flashdata('error', 'Gagal Melakukan deposit');
			echo json_encode(['success' => false, 'message' => 'Gagal Melakukan deposit']);
			exit;
		}
		
		$nominal = $this->input->post('nominal', true);

		$deposit = $this->Deposit_model->insert([
			'nominal' => $nominal
		]);

		$deposit_id = $this->db->insert_id();

		$deposit_reference = $this->Deposit_model->generate_reference($deposit_id, 10);

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
				"order_id" => $deposit_id,
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
				'first_name' => $user->nama_lengkap,
				'last_name' => $user->nama_lengkap,
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

		if ($errno) {
			echo json_encode(['success' => false, 'message' => 'Gagal melakukan deposit']);
			exit;
		} else {
			echo $result;
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
