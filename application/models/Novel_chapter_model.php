<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Novel_chapter_model extends CI_Model
{
    public $table = 'novel_chapter';
    public $id = 'id';
    public $order = 'DESC';

    public function __construct()
    {
        parent::__construct();
    }

    // get all
    public function get_all()
    {
        $this->db->join('novel', 'novel.novel_id = novel_chapter.novel_id', 'left');
		$this->db->join('type', 'type.type_id = novel.type_id', 'left');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    public function get_by_id($id)
    {
        // $this->db->join('novel', 'novel.novel_id = novel_chapter.novel_id', 'left');
		// $this->db->join('type', 'type.type_id = novel.type_id', 'left');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    public function total_rows($q = null)
    {
        $this->db->like('id', $q);
        $this->db->or_like('nama_chapter', $q);
        $this->db->or_like('isi_chapter', $q);
        $this->db->or_like('harga', $q);
        $this->db->or_like('created_at', $q);
        $this->db->or_like('updated_at', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    // insert data
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    public function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
