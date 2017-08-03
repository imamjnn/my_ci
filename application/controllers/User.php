<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('Theme', '', 'theme');		
		$this->load->model('User_model', 'User');

	}

	function index(){
		$id_user = $this->session->userdata('id');

		if($id_user)
			return redirect('/');

		$this->load->view('default/login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$login_check = $this->User->check($username, $password);
		if($login_check->num_rows() == 1){
			foreach($login_check->result() as $data){
				$sess_data['id'] = $data->id;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}
			redirect('login');
		}else{
			$this->session->set_flashdata('message', 'hmmmmmmm!!!!');
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('/'));
	}
}