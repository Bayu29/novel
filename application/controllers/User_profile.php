<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User_profile extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
		$this->load->model('User_model');
    }

	public function index()
	{	
		$user_id = $this->session->userdata('userid');
		$user = $this->User_model->get_by_id($user_id);

		$data['user'] = $user;
		$this->template->load('template_web','web/profile', $data);
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
