<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {


	public function index(){
		$this->load->model('Article_model', 'Article');
		$this->load->library('ObjectFormatter', '', 'formatter');

		$params = array(
			'articles' => array()
			);

		$article = $this->Article->getAll();
		if($article)
			$params['articles'] = $this->formatter->article($article);
		//deb($params);

		$this->load->view('default/home', $params);
	}
}
