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

	function findByCond($title, $category){
		if($title != '')
			$this->db->like('title', $title);
		if($category != '')	
			$this->db->like('category', $category);
        $query = $this->db->get($this->table);

        if(!$query->num_rows())
            return false;
        return $query->result();
	}

}
