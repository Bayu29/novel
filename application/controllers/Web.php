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
		$this->load->model('Member_model');
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

		if (!$novel) {
			redirect(site_url('/my404'));
		}
		
		$novel_chapter = $this->Novel_chapter_model->get_by_novel_id(decrypt_url($id));
		$novel_genre = $this->db->join('genre', 'genre.genre_id = novel_genre.genre_id')->where('novel_id', $novel->novel_id)->get('novel_genre')->result();

		$data['novel'] = $novel;
		$data['novel_chapter'] = $novel_chapter;
		$data['novel_genre'] = $novel_genre;

		$this->template->load('template_web', 'web/detail', $data);
	}

	public function unlock_chapter()
	{
		$chapter_id = $this->input->post('chapter_id', true);
		$chapter = $this->Novel_chapter_model->get_by_id($chapter_id);

		$user = $this->session->userdata('user');

		if (!$user) {
			echo json_encode(['success' => false, 'message' => 'Harap login untuk membeli chapter ini']);
			exit;
		}

		$user = $this->Member_model->get_by_id($user->member_id);
		
		if (!$user) {
			echo json_encode(['success' => false, 'message' => 'Gagal membeli chapter']);
			exit;
		}

		if (intval($user->saldo_akun) < $chapter->harga) {
			echo json_encode(['success' => false, 'message' => 'Saldo anda tidak mencukupi untuk melakukan pembelian!']);
			exit;
		}

		try {
			$this->Pembelian_chapter_model->insert([
				'member_id' => $user->member_id,
				'novel_chapter_id' => $chapter->novel_chapter_id,
				'harga' => $chapter->harga,
				'tanggal_pembelian' => date('Y-m-d')
			]);

			$pembelian_chapter_id = $this->db->insert_id();

			$pembelian_chapter_reference = $this->Pembelian_chapter_model->generate_reference($pembelian_chapter_id, 5);

			$this->Pembelian_chapter_model->update($pembelian_chapter_id, [
				'kode_pembelian' => $pembelian_chapter_reference,
			]);

			$saldo = intval($user->saldo_akun) - intval($chapter->harga);

			$this->Member_model->update($user->member_id, [
				'saldo_akun' => $saldo
			]);

			$this->Mutasi_saldo_model->insert([
				'user_id' => $user->member_id,
				'type' => 'debit',
				'nominal' => $chapter->harga,
				'saldo_akun' => $saldo,
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
		$is_login = is_login_member();

		$novel_chapter = $this->Novel_chapter_model->get_by_id(decrypt_url($id));

		if (!$is_login) {
			$this->session->set_flashdata('error', 'Silahkan login untuk membaca chapter ini');
			redirect(site_url('/web/detail/'.encrypt_url($novel_chapter->novel_id)));
		}

		$user = $this->session->userdata('user');
		$check = $this->db->get_where('pembelian_chapter', ['member_id' => $user->member_id, 'novel_chapter_id' => decrypt_url($id)])->row();

		if (!$check) {
			$this->session->set_flasdata('error', 'Untuk membaca chapter ini silahkan beli chapter ini terlebih dahulu');
			redirect(site_url('/web/detail/'.encrypt_url($novel_chapter->novel_id)));
		}

		
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

	public function daftar_novel()
	{
		$this->load->library('pagination');
		$filter = $this->input->get();

		$search = $this->input->get('search') ? $this->input->get('search') : null;
		$status = $this->input->get('status') ? $this->input->get('status') : null;
		$genre = $this->input->get('genre') ? $this->input->get('genre') : null;
		$from_price = $this->input->get('from_price') ? $this->input->get('from_price') : null;
		$to_price = $this->input->get('to_price') ? $this->input->get('to_price') : null;

		if (empty($filter)) {
			$url = base_url().'web/daftar_novel';
		} else {
			$currentURL = current_url(); //for simple URL
			$params = $_SERVER['QUERY_STRING']; //for parameters
			$url = $currentURL . '?' . $params; //full URL with parameter
		}

		$config['enable_query_string'] = true;
		$config['page_query_string'] = true;
		$config['per_page'] = 9;
		$config['base_url'] = $url;
		$config['total_rows'] = $this->Novel_model->row_by_filter($filter);

		$from = $this->input->get('start') ? html_escape($this->input->get('start')) : 0;

		$novels = $this->Novel_model->get_by_filter($filter, $config['per_page'], $from);
				
		$this->pagination->initialize($config);

		$genres = $this->Genre_model->get_all();

		$data['search'] = $search;
		$data['status'] = $status;
		$data['genre'] = $genre;
		$data['from_price'] = $from_price;
		$data['to_price'] = $to_price;
		$data['novels'] = $novels;
		$data['genres'] = $genres;
		
		$this->template->load('template_web', 'web/daftar_novel', $data);
	}

	public function cari_novel()
	{
		$filter = $this->input->get();

		$novel = $this->Novel_model->get_by_filter($filter);

		print_r($novel);exit;
	}
}
