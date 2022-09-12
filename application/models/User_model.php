<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{

    public $table = 'user';
    public $id = 'user_id';
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
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('user_id', $q);
	$this->db->or_like('username', $q);
	$this->db->or_like('password', $q);
	$this->db->or_like('level_id', $q);
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

	public function login ($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$post['username']);
        $this->db->where('password',sha1($post['password']));
        $query=$this->db->get();
        return $query;
    }

	public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('user');
        if ($id !=null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
	
	public function addHistory($user_id, $info, $user_agent) {
        return $this->db->insert('history_login', array('user_id' => $user_id, 'info' => $info,'user_agent' =>$user_agent));
    }

	public function getUserByEmail($email)
	{
		$data = $this->db->get_where($this->table, ['email' => $email],1)->row();
		
		return $data;
	}

	public function insertToken($user_id)
	{
		$token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d H:i:s');

        $string = array(
            'token' => $token,
            'user_id' => $user_id,
            'created_at' => $date
        );
        $query = $this->db->insert_string('token', $string);
        $this->db->query($query);
        return $token . $user_id;
	}

	public function isTokenValid($token)
	{
		$tkn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $q = $this->db->get_where('token', array(
            'token.token' => $tkn,
            'token.user_id' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = date('Y-m-d', strtotime($row->created_at));
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->get_by_id($row->user_id);
            return $user_info;
        } else {
            return false;
		}
	}

	public function updatePassword($post)
    {
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', array('password' => $post['password']));
        return true;
    }
}
