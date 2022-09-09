<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Type extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Type_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$type = $this->Type_model->get_all();
		$data = array(
			'type_data' => $type,
		);
		$this->template->load('template', 'type/type_list', $data);
	}

	public function read($id)
	{
		$row = $this->Type_model->get_by_id(decrypt_url($id));
		if ($row) {
			$data = array(
				'type_id' => $row->type_id,
				'nama_type' => $row->nama_type,
			);
			$this->template->load('template', 'type/type_read', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('type'));
		}
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('type/create_action'),
			'type_id' => set_value('type_id'),
			'nama_type' => set_value('nama_type'),
		);
		$this->template->load('template', 'type/type_form', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$data = array(
				'nama_type' => $this->input->post('nama_type', TRUE),
			);

			$this->Type_model->insert($data);
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('type'));
		}
	}

	public function update($id)
	{
		$row = $this->Type_model->get_by_id(decrypt_url($id));

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('type/update_action'),
				'type_id' => set_value('type_id', $row->type_id),
				'nama_type' => set_value('nama_type', $row->nama_type),
			);
			$this->template->load('template', 'type/type_form', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('type'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update(encrypt_url($this->input->post('type_id', TRUE)));
		} else {
			$data = array(
				'nama_type' => $this->input->post('nama_type', TRUE),
			);

			$this->Type_model->update($this->input->post('type_id', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('type'));
		}
	}

	public function delete($id)
	{
		$row = $this->Type_model->get_by_id(decrypt_url($id));

		if ($row) {
			$this->Type_model->delete(decrypt_url($id));
			$error = $this->db->error();
			if ($error['code'] != 0) {
				$this->session->set_flashdata('error', 'Hapus data gagal, data sudah berelasi !!! ');
			} else {
				$this->session->set_flashdata('message', 'Delete Record Success');
			}
			redirect(site_url('type'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('type'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_type', 'nama type', 'trim|required');

		$this->form_validation->set_rules('type_id', 'type_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Type.php */
/* Location: ./application/controllers/Type.php */
/* Please DO NOT modify this information : */
