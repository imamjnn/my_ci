<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_article extends MY_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Article_model', 'Article');
		$this->load->library('ObjectFormatter', '', 'formatter');
	}

	public function index(){
        if(!$this->user)
			return redirect('login');

		$params = array(
			'articles' => array()
			);

		$article = $this->Article->getAll();
		if($article)
			$params['articles'] = $this->formatter->article($article);

        $title = $this->input->get('title');
        $status = $this->input->get('status');
        $coba = $this->Article->findByCond($title, $status);
        if($coba)
            $params['articles'] = $this->formatter->article($coba);
		//deb($coba);

		$this->load->view('admin/article/index', $params);
	}

    public function edit($id){
        if(!$this->user)
			return redirect('login');

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
		$this->load->view('admin/article/edit', $params);
	}

    function save($id){
        if(!$this->user)
			return $this->show_404();

		$title = $this->input->post('title');
		$slug = url_title($title, '-', true);
		$data = array(
            'user' => $this->user->id,
			'title' => $title,
			'slug' => $slug,
			'content' => $this->input->post('content'),
			'cover' => $this->input->post('cover'),
            'updated' => date('Y-m-d H:i:s')
			);

		if(!$id){
			$this->Article->create($data);
		}else{
			$this->Article->setByCond(['id'=>$id], $data);
		}

		return redirect('admin/article');
	}
}
