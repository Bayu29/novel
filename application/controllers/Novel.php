<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Novel extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Novel_model');
		$this->load->model('Type_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$novel = $this->Novel_model->get_all();
		$data = array(
			'novel_data' => $novel,
		);
		$this->template->load('template', 'novel/novel_list', $data);
	}

	public function create()
	{
		$data = array(
			'button' => 'Create',
			'data_type' => $this->Type_model->get_all(),
			'data_genre' => $this->Genre_model->get_all(),
			'action' => site_url('novel/create_action'),
			'novel_id' => set_value('novel_id'),
			'title' => set_value('title'),
			'tgl_released' => set_value('tgl_released'),
			'total_chapter' => set_value('total_chapter'),
			'author' => set_value('author'),
			'sinopsis' => set_value('sinopsis'),
			'rating' => set_value('rating'),
			'status' => set_value('status'),
			'type_id' => set_value('type_id'),
			'thumbnail' => set_value('thumbnail'),
			'update_on' => set_value('update_on'),
		);
		$this->template->load('template', 'novel/novel_form', $data);
	}

	public function create_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {

			$config['upload_path']      = './template/assets/img/novel';
			$config['allowed_types']    = '*';
			$config['max_size']         = 10048;
			$config['file_name']        = 'File-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload("thumbnail");
			$data = $this->upload->data();
			$thumbnail = $data['file_name'];

			$data = array(
				'title' => $this->input->post('title', TRUE),
				'tgl_released' => $this->input->post('tgl_released', TRUE),
				'total_chapter' => $this->input->post('total_chapter', TRUE),
				'author' => $this->input->post('author', TRUE),
				'sinopsis' => $this->input->post('sinopsis', TRUE),
				'rating' => $this->input->post('rating', TRUE),
				'status' => $this->input->post('status', TRUE),
				'type_id' => $this->input->post('type_id', TRUE),
				'thumbnail' => $thumbnail,
				'update_on' => $this->input->post('update_on', TRUE),
			);
			$this->Novel_model->insert($data);
			$last_id = $this->db->insert_id();

			$genre_id       = $_POST['genre_id'];
			$jumlah_data = count($genre_id);
			for ($i = 0; $i < $jumlah_data; $i++) {
				$novelGenre['novel_id '] = $last_id;
				$novelGenre['genre_id'] = $genre_id[$i];
				$this->db->insert('novel_genre', $novelGenre);
			}


			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('novel'));
		}
	}

	public function update($id)
	{
		$row = $this->Novel_model->get_by_id(decrypt_url($id));

		if ($row) {
			$data = array(
				'button' => 'Update',
				'data_type' => $this->Type_model->get_all(),
				'data_genre' => $this->Genre_model->get_all(),
				'action' => site_url('novel/update_action'),
				'novel_id' => set_value('novel_id', $row->novel_id),
				'title' => set_value('title', $row->title),
				'tgl_released' => set_value('tgl_released', $row->tgl_released),
				'total_chapter' => set_value('total_chapter', $row->total_chapter),
				'author' => set_value('author', $row->author),
				'sinopsis' => set_value('sinopsis', $row->sinopsis),
				'rating' => set_value('rating', $row->rating),
				'status' => set_value('status', $row->status),
				'type_id' => set_value('type_id', $row->type_id),
				'thumbnail' => set_value('thumbnail', $row->thumbnail),
				'update_on' => set_value('update_on', $row->update_on),
			);
			$this->template->load('template', 'novel/novel_form', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('novel'));
		}
	}

	public function update_action()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update(encrypt_url($this->input->post('novel_id', TRUE)));
		} else {
			$novel_id = $this->input->post('novel_id');
			$config['upload_path']      = './template/assets/img/novel';
			$config['allowed_types']    = '*';
			$config['max_size']         = 10048;
			$config['file_name']        = 'File-' . date('ymd') . '-' . substr(sha1(rand()), 0, 10);
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload("thumbnail")) {
				$row = $this->Novel_model->get_by_id($this->input->post('novel_id'));
				$data = $this->upload->data();
				$thumbnail = $data['file_name'];
				if ($row->thumbnail == null || $row->thumbnail == '') {
				} else {
					$target_file = './template/assets/img/novel/' . $row->thumbnail;
					unlink($target_file);
				}
			} else {
				$thumbnail = $this->input->post('thumbnail_lama');
			}

			$data = array(
				'title' => $this->input->post('title', TRUE),
				'tgl_released' => $this->input->post('tgl_released', TRUE),
				'total_chapter' => $this->input->post('total_chapter', TRUE),
				'author' => $this->input->post('author', TRUE),
				'sinopsis' => $this->input->post('sinopsis', TRUE),
				'rating' => $this->input->post('rating', TRUE),
				'status' => $this->input->post('status', TRUE),
				'type_id' => $this->input->post('type_id', TRUE),
				'thumbnail' => $thumbnail,
				'update_on' => $this->input->post('update_on', TRUE),
			);
			$this->Novel_model->update($this->input->post('novel_id', TRUE), $data);
			// ambil data genre dari db
			$dataGenre = $this->db->query("SELECT * FROM novel_genre where novel_id='$novel_id'")->result();
			$genreExiting = array();
			$genreNewForm = array();
			foreach ($dataGenre as $value) {
				array_push($genreExiting, $value->genre_id);
			}
			$genre_id       = $_POST['genre_id'];
			$jumlah_data = count($genre_id);
			for ($i = 0; $i < $jumlah_data; $i++) {
				// jika blm ada data genre insertkan
				if (!in_array($genre_id[$i], $genreExiting)) {
					$novelGenre['novel_id '] = $this->input->post('novel_id');
					$novelGenre['genre_id'] = $genre_id[$i];
					$this->db->insert('novel_genre', $novelGenre);
				}
				// push array baru dari inputan
				array_push($genreNewForm,$genre_id[$i]);
			}
			// bandingkan array lama dengan yg baru
			$irisanArray=array_diff($genreExiting,$genreNewForm);
			// delete novel genre berdasarkan irisan array
			foreach ($irisanArray as $value) {
				$this->db->query("DELETE FROM novel_genre WHERE genre_id='$value'");
			}
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('novel'));
		}
	}

	public function delete($id)
	{
		$row = $this->Novel_model->get_by_id(decrypt_url($id));

		if ($row) {
			if ($row->thumbnail == null || $row->thumbnail == '') {
			} else {
				$target_file = './template/assets/img/novel/' . $row->thumbnail;
				unlink($target_file);
			}


			$this->Novel_model->delete(decrypt_url($id));
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('novel'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('novel'));
		}
	}
	public function chapter($id)
	{
		
		$row = $this->Novel_model->get_by_id(decrypt_url($id));

		$this->db->where('novel_id', decrypt_url($id));
		$novel_chapter = $this->db->get('novel_chapter')->result();

		if ($row) {
			$data = array(
				'button' => 'Update',
				'data_type' => $this->Type_model->get_all(),
				'data_genre' => $this->Genre_model->get_all(),
				'action' => site_url('novel/update_action'),
				'novel_id' => set_value('novel_id', $row->novel_id),
				'title' => set_value('title', $row->title),
				'tgl_released' => set_value('tgl_released', $row->tgl_released),
				'total_chapter' => set_value('total_chapter', $row->total_chapter),
				'author' => set_value('author', $row->author),
				'sinopsis' => set_value('sinopsis', $row->sinopsis),
				'rating' => set_value('rating', $row->rating),
				'status' => set_value('status', $row->status),
				'nama_type' => set_value('type_id', $row->nama_type),
				'thumbnail' => set_value('thumbnail', $row->thumbnail),
				'update_on' => set_value('update_on', $row->update_on),
				'novel_chapter' => $novel_chapter
			);
			$this->template->load('template', 'novel/chapter', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('novel'));
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('tgl_released', 'tgl released', 'trim|required');
		$this->form_validation->set_rules('total_chapter', 'total chapter', 'trim|required');
		$this->form_validation->set_rules('author', 'author', 'trim|required');
		$this->form_validation->set_rules('sinopsis', 'sinopsis', 'trim|required');
		$this->form_validation->set_rules('rating', 'rating', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('type_id', 'Type', 'trim|required');
		$this->form_validation->set_rules('thumbnail', 'thumbnail', 'trim');
		// $this->form_validation->set_rules('update_on', 'update on', 'trim|required');
		$this->form_validation->set_rules('novel_id', 'novel_id', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
}

/* End of file Novel.php */
/* Location: ./application/controllers/Novel.php */
/* Please DO NOT modify this information : */
