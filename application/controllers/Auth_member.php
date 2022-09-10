<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_member extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
		$this->load->model('User_model');
    }

	public function process_login()
	{	
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->User_model->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level_id' => $row->level_id
				);
				$this->session->set_userdata($params);
				$this->User_model->addHistory($this->fungsi->user_login()->user_id, $this->fungsi->user_login()->username.' Telah melakukan login', $_SERVER['HTTP_USER_AGENT']);
				
				$this->session->set_flashdata('success', 'Berhasil Login, Selamat datang '.$row->nama_lengkap);
				redirect(site_url('/'));
			} else {
				$this->session->set_flashdata('error', 'Login gagal, username atau password salah');
				redirect(site_url('web/login'));
			}
		}
	} 

	public function register()
	{
		$post = $this->input->post(null, TRUE);

		if (isset($post['register'])) {
			$query = $this->User_model->login($post);
			if ($query->num_rows() > 0) {
				$this->session->set_flashdata('gagal', 'Login gagal, username atau password sudah digunakan');
			} else {
				try {
					$payload = [
						'nama_lengkap' => $this->input->post('nama_lengkap', true),
						'email' => $this->input->post('email', true),
						'username' => $this->input->post('username', true),
						'password' => sha1($this->input->post('password', true)),
						'no_hp' => $this->input->post('no_hp', true),
						'level_id' => 2,
					];

					$this->User_model->insert($payload);
					$id = $this->db->insert_id();

					$params = [
						'userid' => $id,
						'level_id' => 2,
					];

					$this->session->set_userdata($params);

					$this->User_model->addHistory($this->fungsi->user_login()->user_id, $this->fungsi->user_login()->username.' Telah melakukan login', $_SERVER['HTTP_USER_AGENT']);

					echo "<script>window.location='" . site_url('/') . "'</script>";
				} catch (\Exception $e) {
					$this->session->set_flashdata('gagal', 'Gagal Melakukan Registrasi silahkan hubungi admin');
				}
				
			}
		}
	}

	public function logout()
	{
		$params = array('userid', 'level_id');
		$this->session->unset_userdata($params);
		redirect('auth');
	} 
}
