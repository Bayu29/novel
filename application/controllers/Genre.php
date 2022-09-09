<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Genre extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Genre_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $genre = $this->Genre_model->get_all();
        $data = array(
            'genre_data' => $genre,
        );
        $this->template->load('template','genre/genre_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Genre_model->get_by_id(decrypt_url($id));
        if ($row) {
            $data = array(
		'genre_id' => $row->genre_id,
		'nama_genre' => $row->nama_genre,
	    );
            $this->template->load('template','genre/genre_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('genre/create_action'),
	    'genre_id' => set_value('genre_id'),
	    'nama_genre' => set_value('nama_genre'),
	);
        $this->template->load('template','genre/genre_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_genre' => $this->input->post('nama_genre',TRUE),
	    );

            $this->Genre_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('genre'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Genre_model->get_by_id(decrypt_url($id));

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('genre/update_action'),
		'genre_id' => set_value('genre_id', $row->genre_id),
		'nama_genre' => set_value('nama_genre', $row->nama_genre),
	    );
            $this->template->load('template','genre/genre_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update(encrypt_url($this->input->post('genre_id', TRUE)));
        } else {
            $data = array(
		'nama_genre' => $this->input->post('nama_genre',TRUE),
	    );

            $this->Genre_model->update($this->input->post('genre_id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('genre'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Genre_model->get_by_id(decrypt_url($id));

        if ($row) {
            $this->Genre_model->delete(decrypt_url($id));
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('genre'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('genre'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_genre', 'nama genre', 'trim|required');

	$this->form_validation->set_rules('genre_id', 'genre_id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Genre.php */
/* Location: ./application/controllers/Genre.php */
/* Please DO NOT modify this information : */
