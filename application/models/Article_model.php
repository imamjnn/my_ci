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

	function findByCond($title, $status){
		$this->db->like('title', $title);
		$this->db->like('status', $status);
        $query = $this->db->get($this->table);

        if(!$query->num_rows())
            return false;
        return $query->result();
	}

}
