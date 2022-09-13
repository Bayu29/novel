<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembelian_chapter_model extends CI_Model
{

    public $table = 'pembelian_chapter';
    public $id = 'pembelian_chapter_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
		$this->db->join('member', 'member.member_id = pembelian_chapter.member_id');
		$this->db->join('novel_chapter', 'novel_chapter.novel_chapter_id = pembelian_chapter.novel_chapter_id');
		$this->db->join('novel', 'novel.novel_id = novel_chapter.novel_id');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('pembelian_chapter_id', $q);
	$this->db->or_like('kode_pembelian', $q);
	$this->db->or_like('member_id', $q);
	$this->db->or_like('novel_chapter_id', $q);
	$this->db->or_like('harga', $q);
	$this->db->or_like('tanggal_pembelian', $q);
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

	function generate_reference($id, $length)
	{
		return 'CPR'.sprintf('%07d',$id).strtoupper($this->generateRandomString($length));
	}

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
		return $randomString;
	}

}
