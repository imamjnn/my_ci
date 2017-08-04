<?php

class Param{
	private $CI;
	private $site_params;

	function __construct(){
        $this->CI =&get_instance();
        
    }

	public function item(){
		$id = 1;
        $this->CI->load->model('Siteparams_model', 'SParams');
        $data = $this->CI->SParams->get($id);
        return $data->value;
    }
}