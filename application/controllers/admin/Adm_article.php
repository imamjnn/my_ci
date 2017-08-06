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
			'articles' => []
			);

        $page = $this->input->get('page');
        $title = $this->input->get('title');
        $category = $this->input->get('category');

        if(!$page)
            $page = 1;
        $cond = array(
            'category'=>$category,
            'title' => $title
            );

		$this->load->library('pagination');
        if(!$category && !$title){
            $config['total_rows'] = $this->Article->getTotal(false,false);
            $config['base_url'] = base_url('admin/article');
        }else{
            $config['total_rows'] = $this->Article->getTotal($cond);
            $config['base_url'] = base_url('admin/article?category='.$category.'&title='.$title);
        }
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['uri_segment'] = $page;
		$config['per_page'] = 5;
		$this->pagination->initialize($config);

        $article = $this->Article->findByCond($title, $category, $config['per_page'], $page);
        if($article)
            $params['articles'] = $this->formatter->article($article);
		//deb($article);

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
            'category' => $this->input->post('category'),
            'status' => $this->input->post('status'),
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
