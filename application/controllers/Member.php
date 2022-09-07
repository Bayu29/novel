<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Member_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$member = $this->Member_model->get_all();
		$data = array(
			'member_data' => $member,
		);
		$this->template->load('template', 'member/member_list', $data);
	}

	public function read($id)
	{
		$row = $this->Member_model->get_by_id(decrypt_url($id));
		if ($row) {
			$data = array(
				'member_id' => $row->member_id,
				'nama' => $row->nama,
				'email' => $row->email,
				'no_hp' => $row->no_hp,
				'jk_kelamin' => $row->jk_kelamin,
				'alamat' => $row->alamat,
				'saldo_akun' => $row->saldo_akun,
				'is_aktif' => $row->is_aktif,
				'photo' => $row->photo,
				'password' => $row->password,
			);
			$this->template->load('template', 'member/member_read', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('member'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('member/create_action'),
			'member_id' => set_value('member_id'),
			'nama' => set_value('nama'),
			'email' => set_value('email'),
			'no_hp' => set_value('no_hp'),
			'jk_kelamin' => set_value('jk_kelamin'),
			'alamat' => set_value('alamat'),
			'saldo_akun' => set_value('saldo_akun'),
			'is_aktif' => set_value('is_aktif'),
			'photo' => set_value('photo'),
			'password' => set_value('password'),
		);
		$this->template->load('template', 'member/member_form', $data);
	}

	public function create_action()
	{
		$this->_rules(null);

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$config['upload_path']      = './template/assets/img/member';
			$config['allowed_types']    = '*';
			$config['max_size']         = 10048;
			$config['file_name']        = 'File-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload("photo");
			$data = $this->upload->data();
			$photo = $data['file_name'];

			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'email' => $this->input->post('email', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'jk_kelamin' => $this->input->post('jk_kelamin', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'saldo_akun' => $this->input->post('saldo_akun', TRUE),
				'is_aktif' => $this->input->post('is_aktif', TRUE),
				'photo' => $photo,
				'password' => $this->input->post('password', TRUE),
			);

			$this->Member_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('member'));
		}
	}

	public function update($id)
	{
		$row = $this->Member_model->get_by_id(decrypt_url($id));

		if ($row) {

			$data = array(
				'button' => 'Update',
				'action' => site_url('member/update_action'),
				'member_id' => set_value('member_id', $row->member_id),
				'nama' => set_value('nama', $row->nama),
				'email' => set_value('email', $row->email),
				'no_hp' => set_value('no_hp', $row->no_hp),
				'jk_kelamin' => set_value('jk_kelamin', $row->jk_kelamin),
				'alamat' => set_value('alamat', $row->alamat),
				'saldo_akun' => set_value('saldo_akun', $row->saldo_akun),
				'is_aktif' => set_value('is_aktif', $row->is_aktif),
				'photo' => set_value('photo', $row->photo),
				'password' => set_value('password', $row->password),
			);
			$this->template->load('template', 'member/member_form', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('member'));
		}
	}

	public function update_action()
	{
		$this->_rules('update');

		if ($this->form_validation->run() == FALSE) {
			$this->update(encrypt_url($this->input->post('member_id', TRUE)));
		} else {
			$config['upload_path']      = './template/assets/img/member';
			$config['allowed_types']    = '*';
			$config['max_size']         = 10048;
			$config['file_name']        = 'File-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload("photo")) {
				$row = $this->Member_model->get_by_id($this->input->post('member_id'));
				$data = $this->upload->data();
				$photo = $data['file_name'];
				if ($row->photo == null || $row->photo == '') {
				} else {
					$target_file = './template/assets/img/member/' . $row->photo;
					unlink($target_file);
				}
			} else {
				$photo = $this->input->post('photo_lama');
			}

			
			$data = array(
				'nama' => $this->input->post('nama', TRUE),
				'email' => $this->input->post('email', TRUE),
				'no_hp' => $this->input->post('no_hp', TRUE),
				'jk_kelamin' => $this->input->post('jk_kelamin', TRUE),
				'alamat' => $this->input->post('alamat', TRUE),
				'saldo_akun' => $this->input->post('saldo_akun', TRUE),
				'is_aktif' => $this->input->post('is_aktif', TRUE),
				'photo' => $photo,
				'password' => $this->input->post('password', TRUE),
			);

			$this->Member_model->update($this->input->post('member_id', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('member'));
		}
	}

	public function delete($id)
	{
		$row = $this->Member_model->get_by_id(decrypt_url($id));

		if ($row) {
			if ($row->photo == null || $row->photo == '') {
			} else {
				$target_file = './template/assets/img/member/' . $row->photo;
				unlink($target_file);
			}

			$this->Member_model->delete(decrypt_url($id));
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('member'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('member'));
		}
	}

	public function _rules($type)
	{
		if ($type == null) {
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
		}
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
		$this->form_validation->set_rules('jk_kelamin', 'jk kelamin', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('saldo_akun', 'saldo akun', 'trim|required');
		$this->form_validation->set_rules('is_aktif', 'is aktif', 'trim|required');
		$this->form_validation->set_rules('photo', 'photo', 'trim');
		$this->form_validation->set_rules('member_id', 'member_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */
/* Please DO NOT modify this information : */
