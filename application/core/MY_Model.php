<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class MY_Model extends CI_Model {

	var $table= '';

	function __construct(){
        $this->load->database();
        parent::__construct();
    }

    public function get($id, $limit=1){
    	return $this->getByCond(['id'=>$id], $limit);
    }

    public function getByCond($cond, $limit){
    	$this->db->where($cond);
    	$this->db->limit($limit);
    	$query = $this->db->get($this->table);

    	if(!$query->num_rows())
    		return false;
        if($limit === 1)
            return $query->row();
    	return $query->result();
    }

    public function getAll(){
        $query = $this->db->get($this->table);

        if(!$query->num_rows())
            return false;
        return $query->result();
    }

	public function getLike($like, $limit){
		$this->db->like($like);
		$this->db->limit($limit);
        $query = $this->db->get($this->table);

        if(!$query->num_rows())
            return false;
        return $query->result();
    }

    public function create($row){
        if($this->db->insert($this->table, $row))
            return $this->db->insert_id();
        return false;
    }

	public function createBatch($row){
        if($this->db->insert_batch($this->table, $row))
            return $this->db->insert_id();
        return false;
    }

    public function setByCond($cond, $data){
        $this->db->where($cond);
        return $this->db->update($this->table, $data);
    }

    public function remove($id){
        return $this->removeByCond(['id'=>$id]);
    }

    public function removeByCond($cond){
        $this->db->where($cond);
        return $this->db->delete($this->table);
    }

}
