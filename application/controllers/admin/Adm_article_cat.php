<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_article_cat extends MY_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('Articlecategory_model', 'ACategory');
		$this->load->library('ObjectFormatter', '', 'formatter');
	}

	public function index(){
        if(!$this->user)
			return redirect('login');

		$params = array(
			'categories' => []
			);

        
        $category = $this->ACategory->getAll();
        if($category)
            $params['categories'] = $this->formatter->category($category);
		//deb($params);

		$this->load->view('admin/article/category/index', $params);
	}

    public function edit($id){
        if(!$this->user)
			return redirect('login');

		$params = array(
			'article' => [],
            'category' => array(),
            'tags' => null,
            'tag_in' => null,
			'error' => ''
			);

		$article = $this->Article->get($id);
        
		$params['id'] = $id;
		$params['article']= $article;
        $params['category'] = $this->ACategory->getAll();
        $params['tags'] = $this->ATag->getAll();

        $tags = $this->ATag->getJoin(['article'=>$id]);
        $tag_in = array();
        foreach($tags as $tag){
            $tag_in[$tag->article_tag] = $tag->article_tag;
        }
        $params['tag_in'] = $tag_in;

		if(!$id){
			$params['title'] = 'Create New';
		}else{
			$params['title'] = 'Edit Article';
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
			$article_id = $this->Article->create($data);
            $tag = $this->input->post('tag');
            $hasil = array();
            foreach ($tag as $key => $value) {
                $hasil[] = array(
                    'article_tag'=>$value,
                    'article' => $article_id
                    );
            }
            $this->ATChain->createBatch($hasil);
		}else{
			$this->Article->setByCond(['id'=>$id], $data);
            $this->ATChain->removeByCond(['article'=>$id]);
            $tag = $this->input->post('tag');
            $hasil = array();
            if($tag){
                foreach ($tag as $key => $value) {
                    $hasil[] = array(
                        'article_tag'=>$value,
                        'article' => $id
                        );
                }
                $this->ATChain->createBatch($hasil);
            }
                

		}

		return redirect('admin/article');
	}
}
