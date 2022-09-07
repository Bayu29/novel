<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Novel_model extends CI_Model
{

    public $table = 'novel';
    public $id = 'novel_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
		$this->db->join('type', 'type.type_id = novel.type_id', 'left');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
		$this->db->join('type', 'type.type_id = novel.type_id', 'left');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('novel_id', $q);
	$this->db->or_like('title', $q);
	$this->db->or_like('tgl_released', $q);
	$this->db->or_like('total_chapter', $q);
	$this->db->or_like('author', $q);
	$this->db->or_like('sinopsis', $q);
	$this->db->or_like('rating', $q);
	$this->db->or_like('thumbnail', $q);
	$this->db->or_like('update_on', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }


    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}
