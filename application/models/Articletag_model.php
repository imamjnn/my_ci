<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class Articletag_model extends MY_Model {

	function __construct() {
        parent::__construct();
        $this->table = 'article_tag';
    }

	function getJoin($cond){
        $this->db->order_by('article_tag.id', 'DESC');
        $this->db->join('article_tag_chain', 'article_tag.id=article_tag_chain.article_tag');
        $this->db->where($cond);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
