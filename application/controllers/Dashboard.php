<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        is_login();
		// check_admin();
		$this->load->model('Deposit_model');
		$this->load->model('Pembelian_chapter_model');
		$this->load->model('Novel_model');
		$this->load->model('Novel_chapter_model');
    }

	public function index()
	{
		$deposit = $this->db->where('status', 'success')->get('deposit')->num_rows();
		$pembelian_chapter = $this->db->get('pembelian_chapter')->num_rows();
		$margin_keuntungan = $this->db->select_sum('harga')->get('pembelian_chapter')->row();
		
		$novel_terlaris = [];
		
		$data_novel = $this->db->query("SELECT 
			pembelian_chapter.novel_id,
			novel.title, 
			count(pembelian_chapter.novel_id) as jumlah 
		FROM `pembelian_chapter` 
		INNER JOIN novel 
		ON pembelian_chapter.novel_id = novel.novel_id
		GROUP BY pembelian_chapter.novel_id
		ORDER BY jumlah ASC
		LIMIT 7;")->result();

		foreach ($data_novel as $i => $novel) {
			$data_terlaris = [
				'judul' => $novel->title,
				'jumlah' => $novel->jumlah,
			];

			array_push($novel_terlaris, $data_terlaris);
		}

		$data['jumlah_deposit'] = $deposit;
		$data['jumlah_pembelian_chapter'] = $pembelian_chapter;
		$data['margin_keuntungan'] = $margin_keuntungan;
		$data['novel_terlaris'] = $novel_terlaris;

		$this->template->load('template','dashboard', $data);
	}

}
