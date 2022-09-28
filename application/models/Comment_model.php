<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comment_model extends CI_Model
{

    public $table = 'comments';
    public $id = 'comment_id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
		$this->db->join('', 'user.user_id = deposit.user_id');
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
		//$this->db->join('user', 'user.user_id = deposit.user_id');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('comment_id', $q);
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

	function parent_comment()
	{
		$this->db->join('member', 'member.member_id = comments.user_id_sender');
		$this->db->where('reply_to', null);
		$this->db->or_where('reply_to', '');
		$this->db->order_by('comment_id', 'desc');
		$this->db->limit(10);
		$parent_comments = $this->db->get($this->table)->result();

		return $parent_comments;
	}

	function child_comment($parent_id)
	{
		$this->db->join('member', 'member.member_id = comments.user_id_sender');
		$this->db->where('parent_id', $parent_id);
		$this->db->order_by('comment_id', 'desc');
		$this->db->limit(10);
		$child_comment = $this->db->get($this->table)->result();

		return $child_comment;
	}
}
