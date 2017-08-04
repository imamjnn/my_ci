<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends CI_Controller {
	public $user;
	
	function __construct(){
		parent::__construct();

		$this->load->library('Theme', '', 'theme');
		$this->load->library('Param', '', 'param');
		$this->load->library('ObjectMeta', '', 'meta');
		$this->load->library('session');
		$this->load->model('User_model', 'User');

        $id = $this->session->userdata('id');
        $this->user = $this->User->get($id);

	}

	public function show_404(){
        $this->load->view('404');
    }
}