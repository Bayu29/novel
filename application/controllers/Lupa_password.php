<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Lupa_password extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Setting_web_model');
        $this->load->library('form_validation');
		$this->load->library('email');
    }

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Silahkan masukkan email anda');
			redirect(site_url('/web/forgot_password'));
        } else {
			$setting = $this->Setting_web_model->get_by_id(1);
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->User_model->getUserByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('error', 'email address salah, silakan coba lagi.');
                redirect(site_url('web/login'), 'refresh');
            }

            //build token   

            $token = $this->User_model->insertToken($userInfo->user_id);
            $qstring = $this->base64url_encode($token);

			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= $setting->email; // isi dengan email kamu
			$config['smtp_pass']= $setting->email_password; // isi dengan password kamu
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;

			$this->email->initialize($config);
			$this->email->from($config['smtp_user']);
			$this->email->to($this->input->post('email'));
			$this->email->subject('Reset Password');

            $url = site_url() . 'lupa_password/reset_password/token/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $message = '';
            $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';
            $message .= '<strong>Silakan klik link ini:</strong> ' . $link;

			$this->email->message($message);

			if ($this->email->send()) {
				$this->session->set_flashdata('success','Berhasil Mengirim email, reset password. Silahkan cek email anda untuk melakukan reset password');
			} else {
				$this->session->set_flashdata('error', 'Gagal mengirim email, pastikan email yang anda masukkann benar');
			}

            redirect(site_url('web/forgot_password'));
        }
	}

	public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->User_model->isTokenValid($cleanToken); //either false or array();          

        if (!$user_info) {
            $this->session->set_flashdata('sukses', 'Token tidak valid atau kadaluarsa');
            redirect(site_url('web/login'), 'refresh');
        }

        $data = array(
            'title' => 'Reset Password',
            'nama' => $user_info->nama_lengkap,
            'email' => $user_info->email,
            'token' => $this->base64url_encode($token)
        );

        $this->template->load('template_web','web/reset_password', $data);
    }

	public function update_password()
	{
		$token = $this->base64url_decode($this->input->post('token', true));
		$data = array(
            'title' => 'Reset Password',
            'nama' => $this->input->post('nama_lengkap', true),
            'email' => $this->input->post('email'),
            'token' => $this->base64url_encode($token)
        );

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
            redirect(site_url('lupa_password/reset_password/token/'.$token));
        } else {

			$cleanToken = $this->security->xss_clean($token);

        	$user_info = $this->User_model->isTokenValid($cleanToken);
			
            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);

            $hashed = sha1($cleanPost['password']);

            $cleanPost['password'] = $hashed;
            $cleanPost['user_id'] = $user_info->user_id;

            unset($cleanPost['passconf']);
            
			$update = $this->User_model->updatePassword($cleanPost);

			if (!$update) {
                $this->session->set_flashdata('error', 'Update password gagal.');
            } else {
                $this->session->set_flashdata('success', 'Password anda sudah  
             diperbaharui. Silakan login.');
            }

            redirect(site_url('web/login'));
        }
	}

    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }

}

/* End of file Genre.php */
/* Location: ./application/controllers/Genre.php */
/* Please DO NOT modify this information : */
