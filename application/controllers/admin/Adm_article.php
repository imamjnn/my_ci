<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_article extends MY_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Article_model', 'Article');
        $this->load->model('Articlecategory_model', 'ACategory');
        $this->load->model('Articletag_model', 'ATag');
        $this->load->model('Articletagchain_model', 'ATChain');
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
            $page = 0;

        $cond = array(
            'title' => $title,
            'category'=>$category

            );

		$this->load->library('pagination');
        if(!$category && !$title){
            $config['total_rows'] = $this->Article->getTotal(false,false);
            $config['base_url'] = base_url('admin/article');
        }else{
            $config['total_rows'] = $this->Article->getTotal($cond);
            $config['base_url'] = base_url('admin/article?title='.$title.'&category='.$category);
        }
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['uri_segment'] = $page;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

        $article = $this->Article->findByCond($title, $category, $config['per_page'], $page);
        if($article)
            $params['articles'] = $this->formatter->article($article);

        $params['category'] = $this->ACategory->getAll();
		//deb($article);

		$this->load->view('admin/article/index', $params);
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
