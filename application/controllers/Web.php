<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Web extends CI_Controller {

	function __construct()
    {
        parent::__construct();
		$this->load->model('Novel_model');
		$this->load->model('Genre_model');
		$this->load->model('User_model');
		$this->load->model('Novel_chapter_model');
		$this->load->model('Pembelian_chapter_model');
		$this->load->model('Mutasi_saldo_model');
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

	public function unlock_chapter()
	{
		$chapter_id = $this->input->post('chapter_id', true);
		$chapter = $this->Novel_chapter_model->get_by_id($chapter_id);

		$user_id = $this->session->userdata('userid');

		$user = $this->User_model->get_by_id($user_id);
		
		if (!$user) {
			echo json_encode(['success' => false, 'message' => 'Gagal membeli chapter']);
		}

		if (intval($user->saldo) < $chapter->harga) {
			echo json_encode(['success' => false, 'message' => 'Saldo anda tidak mencukupi untuk melakukan pembelian!']);
			exit;
		}

		try {
			$this->Pembelian_chapter_model->insert([
				'member_id' => $user->user_id,
				'novel_chapter_id' => $chapter->novel_chapter_id,
				'harga' => $chapter->harga,
				'tanggal_pembelian' => date('Y-m-d')
			]);

			$pembelian_chapter_id = $this->db->insert_id();

			$pembelian_chapter_reference = $this->Pembelian_chapter_model->generate_reference($pembelian_chapter_id, 5);

			$this->Pembelian_chapter_model->update($pembelian_chapter_id, [
				'kode_pembelian' => $pembelian_chapter_reference,
			]);

			$saldo = intval($user->saldo) - intval($chapter->harga);

			$this->User_model->update($user_id, [
				'saldo' => $saldo
			]);

			$this->Mutasi_saldo_model->insert([
				'user_id' => $user->user_id,
				'type' => 'debit',
				'nominal' => $chapter->harga,
				'saldo' => $saldo,
				'catatan' => 'Pembelian '.$chapter->nama_chapter.' dari novel '.$chapter->title.' sebesar '.$chapter->harga,
				'trx_id' => $pembelian_chapter_id
			]);
			echo json_encode(['success' => true, 'message' => 'Berhasil melakukan pembelian chapter']);
		} catch (\Exception $e) {
			echo json_encode(['success' => false, 'message' => 'gagal melakukan pembelian chapter']);
		}
		

	}

	public function read($id) 
	{
		$novel_chapter = $this->Novel_chapter_model->get_by_id(decrypt_url($id));

		$data['novel_chapter'] = $novel_chapter;


		$this->template->load('template_web', 'web/baca', $data);
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
