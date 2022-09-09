<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembelian_chapter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Pembelian_chapter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pembelian_chapter = $this->Pembelian_chapter_model->get_all();
        $data = array(
            'pembelian_chapter_data' => $pembelian_chapter,
        );
        $this->template->load('template','pembelian_chapter/pembelian_chapter_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pembelian_chapter_model->get_by_id(decrypt_url($id));
        if ($row) {
            $data = array(
		'pembelian_chapter_id' => $row->pembelian_chapter_id,
		'kode_pembelian' => $row->kode_pembelian,
		'member_id' => $row->member_id,
		'novel_chapter_id' => $row->novel_chapter_id,
		'harga' => $row->harga,
		'tanggal_pembelian' => $row->tanggal_pembelian,
	    );
            $this->template->load('template','pembelian_chapter/pembelian_chapter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembelian_chapter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pembelian_chapter/create_action'),
	    'pembelian_chapter_id' => set_value('pembelian_chapter_id'),
	    'kode_pembelian' => set_value('kode_pembelian'),
	    'member_id' => set_value('member_id'),
	    'novel_chapter_id' => set_value('novel_chapter_id'),
	    'harga' => set_value('harga'),
	    'tanggal_pembelian' => set_value('tanggal_pembelian'),
	);
        $this->template->load('template','pembelian_chapter/pembelian_chapter_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_pembelian' => $this->input->post('kode_pembelian',TRUE),
		'member_id' => $this->input->post('member_id',TRUE),
		'novel_chapter_id' => $this->input->post('novel_chapter_id',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tanggal_pembelian' => $this->input->post('tanggal_pembelian',TRUE),
	    );

            $this->Pembelian_chapter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pembelian_chapter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pembelian_chapter_model->get_by_id(decrypt_url($id));

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pembelian_chapter/update_action'),
		'pembelian_chapter_id' => set_value('pembelian_chapter_id', $row->pembelian_chapter_id),
		'kode_pembelian' => set_value('kode_pembelian', $row->kode_pembelian),
		'member_id' => set_value('member_id', $row->member_id),
		'novel_chapter_id' => set_value('novel_chapter_id', $row->novel_chapter_id),
		'harga' => set_value('harga', $row->harga),
		'tanggal_pembelian' => set_value('tanggal_pembelian', $row->tanggal_pembelian),
	    );
            $this->template->load('template','pembelian_chapter/pembelian_chapter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembelian_chapter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update(encrypt_url($this->input->post('pembelian_chapter_id', TRUE)));
        } else {
            $data = array(
		'kode_pembelian' => $this->input->post('kode_pembelian',TRUE),
		'member_id' => $this->input->post('member_id',TRUE),
		'novel_chapter_id' => $this->input->post('novel_chapter_id',TRUE),
		'harga' => $this->input->post('harga',TRUE),
		'tanggal_pembelian' => $this->input->post('tanggal_pembelian',TRUE),
	    );

            $this->Pembelian_chapter_model->update($this->input->post('pembelian_chapter_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pembelian_chapter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pembelian_chapter_model->get_by_id(decrypt_url($id));

        if ($row) {
            $this->Pembelian_chapter_model->delete(decrypt_url($id));
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pembelian_chapter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pembelian_chapter'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_pembelian', 'kode pembelian', 'trim|required');
	$this->form_validation->set_rules('member_id', 'member id', 'trim|required');
	$this->form_validation->set_rules('novel_chapter_id', 'novel chapter id', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');
	$this->form_validation->set_rules('tanggal_pembelian', 'tanggal pembelian', 'trim|required');

	$this->form_validation->set_rules('pembelian_chapter_id', 'pembelian_chapter_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pembelian_chapter.php */
/* Location: ./application/controllers/Pembelian_chapter.php */
/* Please DO NOT modify this information : */
