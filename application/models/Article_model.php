<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Article_model extends MY_Model {

	function __construct() {
        parent::__construct();
        $this->table = 'article';
    }

	function findByCond($title, $category, $limit, $offset){
		if($title)
			$this->db->like('title', $title);
		if($category)
			$this->db->where('category', $category);
        $query = $this->db->get($this->table, $limit, $offset);

        if(!$query->num_rows())
            return false;
        return $query->result();
	}

	function getTotal($title){
		if($title)
			$this->db->like($title);

		$query = $this->db->get($this->table);
		return $query->num_rows();
	}

}
