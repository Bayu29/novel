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

	function get_by_filter($filter, $limit = null, $offset = null) 
	{	
		$search =  isset($filter['search']) ? $filter['search']  : null;
		$status =  isset($filter['status']) ? $filter['status']  : null;
		$genre = isset($filter['genre']) ? $filter['genre'] : null;
		$from_price = isset($filter['from_price']) ? $filter['from_price'] : null;
		$to_price = isset($filter['to_price']) ? $filter['from_price'] : null;

		$this->db->select('novel.novel_id, novel.title, novel.tgl_released, novel.total_chapter, novel.author, novel.sinopsis, novel.rating, novel.thumbnail, novel.update_on, novel.status, novel.type_id');
		$this->db->join('novel_genre', 'novel_genre.novel_id = novel.novel_id', 'left');
		$this->db->join('novel_chapter', 'novel_chapter.novel_id = novel.novel_id', 'left');
		

		if (!empty($status)) {
			$this->db->where('novel.status', ucwords($status));
		}

		if (!empty($search)) {
			$this->db->like('novel.title', $search, 'both');
		}

		if (!empty($genre)) {
			if (gettype($genre) == 'string') {
				$genre = json_decode($genre, true);
			}
			$this->db->where_in('novel_genre.genre_id', $genre);
		}

		if (!empty($from_price) && !empty($to_price)) {
			$this->db->where('novel_chapter.harga >=', $from_price);
			$this->db->where('novel_chapter.harga <=', $to_price);
		}

		$this->db->group_by('novel.novel_id');
		$this->db->order_by('novel.novel_id', 'desc');

		if (!is_null($limit) && !is_null($offset)) {
			$novels = $this->db->get('novel', $limit, $offset);
		} elseif (!is_null($limit) && is_null($offset)) {
			$novels = $this->db->get('novel', $limit);
		} else {
			$novels = $this->db->get('novel');
		}
		
		$novels = $novels->result();

		return $novels;
	}

	function row_by_filter($filter) 
	{
		$search =  isset($filter['search']) ? $filter['search']  : null;
		$status =  isset($filter['status']) ? $filter['status']  : null;
		$genre = isset($filter['genre']) ? $filter['genre'] : null;
		$from_price = isset($filter['from_price']) ? $filter['from_price'] : null;
		$to_price = isset($filter['to_price']) ? $filter['from_price'] : null;

		$this->db->select('novel.novel_id, novel.title, novel.tgl_released, novel.total_chapter, novel.author, novel.sinopsis, novel.rating, novel.thumbnail, novel.update_on, novel.status, novel.type_id');
		$this->db->join('novel_genre', 'novel_genre.novel_id = novel.novel_id', 'left');
		$this->db->join('novel_chapter', 'novel_chapter.novel_id = novel.novel_id', 'left');
		

		if (!empty($status)) {
			$this->db->where('novel.status', ucwords($status));
		}

		if (!empty($search)) {
			$this->db->like('novel.title', $search, 'both');
		}

		if (!empty($genre)) {
			if (gettype($genre) == 'string') {
				$genre = json_decode($genre, true);
			}
			$this->db->where_in('novel_genre.genre_id', $genre);
		}

		if (!empty($from_price) && !empty($to_price)) {
			$this->db->where('novel_chapter.harga >=', $from_price);
			$this->db->where('novel_chapter.harga <=', $to_price);
		}

		$this->db->group_by('novel.novel_id');
		$this->db->order_by('novel.novel_id', 'desc');

		return $this->db->get('novel')->num_rows();
	}

	function search_blog($title){
        $this->db->like('title', $title , 'both');
        $this->db->order_by('title', 'ASC');
        $this->db->limit(10);
        return $this->db->get('novel')->result();
    }

}
