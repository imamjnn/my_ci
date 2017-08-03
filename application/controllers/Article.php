<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Article_model', 'Article');
		$this->load->library('ObjectFormatter', '', 'formatter');
	}
	
	public function single($id=null, $slug=''){
		$article = $this->Article->get($id);

		if($slug != $article->slug)
			redirect('read/'.$article->id.'/'.$article->slug);

		if($article)
			$params['article'] = $this->formatter->article($article);

		$this->load->view('default/article/single', $params);
	}

	public function edit($id){
		if(!$this->user)
			return $this->show_404();
		
		$params = array(
			'article' => null,
			'error' => ''
			);
		
		$article = $this->Article->get($id); 
		$params['id'] = $id;
		$params['article']= $article;

		if(!$id){
			$params['title'] = 'Create New';
		}else{
			$params['title'] = 'Edit Data';
		}

		//deb($params);
		$this->load->view('default/article/edit', $params);
	}

	function save($id){
		if(!$this->user)
			return $this->show_404();

		$title = $this->input->post('title');
		$slug = url_title($title, '-', true);
		$data = array(
			'title' => $title,
			'slug' => $slug,
			'content' => $this->input->post('content'),
			'cover' => $this->input->post('cover')
			);

		if(!$id){
			$this->Article->create($data);
		}else{
			$this->Article->setByCond(['id'=>$id], $data);
		}

		return redirect('/');		
	}
}
