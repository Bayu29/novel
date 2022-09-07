<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Setting_web extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Setting_web_model');
		$this->load->library('form_validation');
	}

	public function update($id)
	{
		$row = $this->Setting_web_model->get_by_id(decrypt_url($id));

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('setting_web/update_action'),
				'setting_web_id' => set_value('setting_web_id', $row->setting_web_id),
				'nama_website' => set_value('nama_website', $row->nama_website),
				'logo' => set_value('logo', $row->logo),
				'telpon' => set_value('telpon', $row->telpon),
				'email' => set_value('email', $row->email),
				'deskripsi' => set_value('deskripsi', $row->deskripsi),
				'is_aktif_website' => set_value('is_aktif_website', $row->is_aktif_website),
			);
			$this->template->load('template', 'setting_web/setting_web_form', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('setting_web'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update(encrypt_url($this->input->post('setting_web_id', TRUE)));
		} else {
			$config['upload_path']      = './temp/assets/img/website';
			$config['allowed_types']    = '*';
			$config['max_size']         = 10048;
			$config['file_name']        = 'File-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload("logo")) {
				$row = $this->Setting_web_model->get_by_id($this->input->post('setting_web_id'));
				$data = $this->upload->data();
				$logo = $data['file_name'];
				if ($row->logo == null || $row->logo == '') {
				} else {
					$target_file = './temp/assets/img/website/' . $row->logo;
					unlink($target_file);
				}
			} else {
				$logo = $this->input->post('logo_lama');
			}

			$data = array(
				'nama_website' => $this->input->post('nama_website', TRUE),
				'logo' => $logo,
				'telpon' => $this->input->post('telpon', TRUE),
				'email' => $this->input->post('email', TRUE),
				'deskripsi' => $this->input->post('deskripsi', TRUE),
				'is_aktif_website' => $this->input->post('is_aktif_website', TRUE),
			);

			$this->Setting_web_model->update($this->input->post('setting_web_id', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('setting_web/update/Umhxc2ZDeHlpc1JpYWNIUVdzNG1sZz09'));
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_website', 'nama website', 'trim|required');
		$this->form_validation->set_rules('logo', 'logo', 'trim');
		$this->form_validation->set_rules('telpon', 'telpon', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		$this->form_validation->set_rules('is_aktif_website', 'is aktif website', 'trim|required');

		$this->form_validation->set_rules('setting_web_id', 'setting_web_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Setting_web.php */
/* Location: ./application/controllers/Setting_web.php */
/* Please DO NOT modify this information : */
