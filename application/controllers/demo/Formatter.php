<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Formatter extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Demo_model', 'Demo');
	}
	
	public function index(){
		$this->load->library('ObjectFormatter', '', 'formatter');
		$demo = $this->Demo->get(60);
		if($demo)
			$params['demo'] = $this->formatter->demo($demo); 
		
		//deb($params);
		$this->load->view('demo/two', $params);
	}

}