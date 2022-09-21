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
		$this->load->model('Member_model');
		$this->load->library('form_validation');
    }

	public function process_login()
	{	
		$this->login_rules();

		if ($this->form_validation->run() == false) {
			redirect(site_url('/web/login'));
		}
		$post = $this->input->post(null, TRUE);
		if (isset($post['login'])) {
			$query = $this->Member_model->login($post);
	
			if ($query->num_rows() > 0) {
				$user = $query->row();
				$params = [
					'user' => $user,
				];
				$this->session->set_userdata($params);
				
				$this->session->set_flashdata('success', 'Berhasil Login, Selamat datang '.$user->nama);
				redirect(site_url('/'));
			} else {
				$this->session->set_flashdata('error', 'Login gagal, username atau password salah');
				redirect(site_url('web/login'));
			}
		}
	} 

	public function register()
	{
		$this->register_rules();

		if ($this->form_validation->run() == false) {
			redirect(site_url('/web/register'));
		}
		$post = $this->input->post(null, TRUE);

		if (isset($post['register'])) {
			$query = $this->Member_model->login($post);
			if ($query->num_rows() > 0) {
				$this->session->set_flashdata('gagal', 'Login gagal, username atau password sudah digunakan');
				redirect(site_url('/web/login'));
			} else {
				try {
					$payload = [
						'nama' => $this->input->post('nama', true),
						'email' => $this->input->post('email', true),
						'username' => $this->input->post('username', true),
						'password' => sha1($this->input->post('password', true)),
						'no_hp' => $this->input->post('no_hp', true),
						'jk_kelamin' => $this->input->post('jk_kelamin'),
						'alamat' => $this->input->post('alamat'),
						'created_at' => date('Y-m-d H:i:s'),
						'is_aktif' => 'Aktif',
					];

					$this->Member_model->insert($payload);
					$id = $this->db->insert_id();

					$user = $this->Member_model->get_by_id($id);

					$params = [
						'user' => $user,
					];

					$this->session->set_userdata($params);

					echo "<script>window.location='" . site_url('/') . "'</script>";
				} catch (\Exception $e) {
					$this->session->set_flashdata('error', 'Gagal Melakukan Registrasi silahkan hubungi admin');
				}
				
			}
		}
	}

	public function logout()
	{
		$params = array('user');
		$this->session->unset_userdata($params);
		redirect('/');
	} 

	public function login_rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

	public function register_rules()
	{
		$this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}
