<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Web extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('Novel_chapter_model');
    }

	public function index()
	{	
		/**
		 * Novel Terbaru
		 */
		$this->db->order_by('novel_id', 'desc');
		$this->db->limit(10);
		$novel = $this->db->get('novel')->result();

		/**
		 * Novel List
		 */
		$this->db->reset_query();	
		$this->db->limit(10);
		$list_novel = $this->db->get('novel')->result();

		$genre = $this->Genre_model->get_all();

		$data['novel'] = $novel;
		$data['list_novel'] = $list_novel;
		$data['genre'] = $genre;
		$this->template->load('template_web','web/home', $data);
	} 

	public function detail($id)
	{
		$novel = $this->Novel_model->get_by_id(decrypt_url($id));
		$novel_chapter = $this->Novel_chapter_model->get_by_novel_id(decrypt_url($id));

		$data['novel'] = $novel;
		$data['novel_chapter'] = $novel_chapter;

		$this->template->load('template_web', 'web/detail', $data);
	}

	public function login()
	{
		$this->template->load('template_web','web/login');
	}

	public function register()
	{
		$this->template->load('template_web','web/register');
	}

	public function forgot_password()
	{
		$this->template->load('template_web', 'web/lupa_password');
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
