<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_home extends MY_Controller {


	public function index(){
		if(!$this->user)
			return redirect('login');

		$this->load->model('Article_model', 'Article');
		$this->load->library('ObjectFormatter', '', 'formatter');

		$params = array(
			'articles' => array()
			);

		$article = $this->Article->getAll();
		if($article)
			$params['articles'] = $this->formatter->article($article);
		//deb($params);

		$this->load->view('admin/home/index', $params);
	}

	public function setting(){
		if(!$this->user)
			return redirect('login');

		$this->load->model('Siteparams_model', 'Param');

		$params = array(
			'sparams' => array()
			);

		$params['sparams'] = $this->Param->getAll();
		//deb($params);

		$this->load->view('admin/home/setting', $params);
	}

	function edit($id){
		if(!$this->user)
			return redirect('login');

		$this->load->model('Siteparams_model', 'Param');

		$params['param'] = $this->Param->get($id);

		$this->load->view('admin/home/setting_edit_modal', $params);
	}

	function saveEdit(){
		if(!$this->user)
			return $this->show_404();

		$this->load->model('Siteparams_model', 'Param');

		$id = $this->input->post('id');
		$data = array(
			'value' => $this->input->post('value')
			);
		$this->Param->setByCond(['id'=>$id], $data);

		return redirect('admin/setting');

	}
}
