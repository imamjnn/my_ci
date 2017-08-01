<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->library('Theme', '', 'theme');

	}

	public function show_404(){
        $this->load->view('404');
    }
}