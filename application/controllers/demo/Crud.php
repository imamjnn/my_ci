<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Crud extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Demo_model', 'Demo');
		$this->load->library('ObjectFormatter', '', 'formatter');
	}
	
	public function index(){
<<<<<<< HEAD
=======
		$this->load->library('ObjectFormatter', '', 'formatter');
		$params = array(
			'demos'=>array()
			);

>>>>>>> bfa9f100a21bbb92b5ab115def3d8ca9da2c3a9c
		$demo = $this->Demo->getAll();
		if($demo)
			$params['demos'] = $this->formatter->demo($demo); 
		
		//deb($params);
		$this->load->view('demo/one', $params);
	}

	public function edit($id=null){
		
		$params = array(
			'demo' => null,
			'error' => ''
			);
		
		$demo = $this->Demo->get($id); 
		$params['id'] = $id;
		$params['demo']= $demo;

		$test = $this->formatter->demo($demo);
		$params['page']= $this->meta->single($test);

		if(!$id){
			$params['title'] = 'Create New';
		}else{
			$params['title'] = 'Edit Data';
		}

		//deb($params);
		$this->load->view('demo/edit', $params);
	}

	function saveData($id){
		$data = array(
			'name' => $this->input->post('name'),
			'photo' => $this->input->post('photo'),
			'description' => $this->input->post('description')
			);

		if(!$id){
			$this->Demo->create($data);
		}else{
			$this->Demo->setByCond(['id'=>$id], $data);
		}

		return redirect('demo/crud');		
	}

	function deleteData($id){
		$this->Demo->remove($id);
		return redirect('demo/crud');
	}	

}