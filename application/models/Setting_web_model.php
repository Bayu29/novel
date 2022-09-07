<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Setting_web_model extends CI_Model
{

	public $table = 'setting_web';
	public $id = 'setting_web_id';
	public $order = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	// get all
	function get_all()
	{
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->table)->result();
	}

	// get data by id
	function get_by_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	public function get($id = null)
	{
		$this->db->select('*');
		$this->db->from('setting_web');
		if ($id != null) {
			$this->db->where('setting_web_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	// get total rows
	function total_rows($q = NULL)
	{
		$this->db->like('setting_web_id', $q);
		$this->db->or_like('nama_website', $q);
		$this->db->or_like('logo', $q);
		$this->db->or_like('telpon', $q);
		$this->db->or_like('email', $q);
		$this->db->or_like('deskripsi', $q);
		$this->db->or_like('is_aktif_website', $q);
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
