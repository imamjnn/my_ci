<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_article_cat extends MY_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('Articlecategory_model', 'ACategory');
		$this->load->library('ObjectFormatter', '', 'formatter');
	}

	public function index($id){
        if(!$this->user)
			return redirect('login');

        $cat_edit = $this->ACategory->get($id);

		$params = array(
			'categories' => [],
            'title' => 'Category',
            'id' => $id,
            'cat_edit' => $cat_edit
			);

        $category = $this->ACategory->getAll();
        if($category)
            $params['categories'] = $this->formatter->article_category($category);

        if(!$id){
            $params['btn_title'] = 'Save';
        }else{
            $params['btn_title'] = 'Update';
        }
		//deb($params);

		$this->load->view('admin/article/category/index', $params);
	}

    function save($id){
        if(!$this->user)
			return $this->show_404();

		$name = $this->input->post('name');
		$slug = url_title($name, '-', true);
		$data = array(
			'name' => $name,
			'slug' => $slug,
			'parent' => $this->input->post('parent'),
			'description' => $this->input->post('description'),
            'created' => date('Y-m-d H:i:s')
			);

		if(!$id){
			$this->ACategory->create($data);
		}else{
			$this->ACategory->setByCond(['id'=>$id], $data);
		}

		return redirect('admin/article/category/0');
	}
}
