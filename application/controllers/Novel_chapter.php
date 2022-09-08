<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Novel_chapter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Novel_model');
        $this->load->model('Type_model');
        $this->load->model('Genre_model');
        $this->load->model('Novel_chapter_model');
        $this->load->library('form_validation');
    }

    public function create_chapter($id)
    {
        $row = $this->Novel_model->get_by_id(decrypt_url($id));

        if ($row) {
            $data = array(
                'button' => 'Tambah chapter',
                'novel_id' => $id
            );
            $this->template->load('template', 'novel/chapter/create', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('novel'));
        }
    }

    public function create_action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->create_chapter($id);
        } else {
            $data = array(
                'nama_chapter' => $this->input->post('nama_chapter', true),
                'isi_chapter' => $this->input->post('isi_chapter', true),
                'harga' => $this->input->post('harga', true),
                'novel_id' => decrypt_url($this->input->post('novel_id', true)),
                'created_at' => date('y-m-d H:i:s'),
                'updated_at' => date('y-m-d H:i:s'),
            );
            $this->Novel_chapter_model->insert($data);
            $last_id = $this->db->insert_id();

            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('novel/chapter/'.$id));
        }
    }

    public function update($id)
    {
        $row = $this->Novel_chapter_model->get_by_id(decrypt_url($id));

        if ($row) {
            $data = array(
                'button' => 'Update',
                'novel_chapter' => $row
            );
            $this->template->load('template', 'novel/chapter/edit', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('novel'));
        }
    }

    public function update_action($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->create_chapter($this->input->post('novel_id', true));
        } else {
			$this->db->where('id', decrypt_url($id));
			$this->db->where('novel_id', decrypt_url($this->input->post('novel_id', true)));
			$row = $this->db->get('novel_chapter')->row();

			if ($row) {
				$data = array(
					'nama_chapter' => $this->input->post('nama_chapter', true),
					'isi_chapter' => $this->input->post('isi_chapter', true),
					'harga' => $this->input->post('harga', true),
					'novel_id' => decrypt_url($this->input->post('novel_id', true)),
					'updated_at' => date('y-m-d H:i:s'),
				);
				$this->Novel_chapter_model->update(decrypt_url($id), $data);
				$last_id = $this->db->insert_id();

				$this->session->set_flashdata('message', 'Create Record Success');
				redirect(site_url('novel/chapter/'.$this->input->post('novel_id', true)));
			} else {
				$this->session->set_flashdata('message', 'Record Not Found');
            	redirect(site_url('novel/chapter/'.$this->input->post('novel_id', true)));
			}
        }
    }

    public function delete($id, $novel_id)
    {
        $row = $this->Novel_chapter_model->get_by_id(decrypt_url($id));
        if ($row) {
            $this->Novel_chapter_model->delete(decrypt_url($id));
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('novel/chapter/'.$novel_id));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('novel/chapter/'.$novel_id));
        }
    }
  


    public function _rules()
    {
        $this->form_validation->set_rules('nama_chapter', 'nama_chapter', 'trim|required');
        $this->form_validation->set_rules('isi_chapter', 'isi_chapter', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required');
        $this->form_validation->set_rules('novel_id', 'Novel', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Novel.php */
/* Location: ./application/controllers/Novel.php */
/* Please DO NOT modify this information : */
