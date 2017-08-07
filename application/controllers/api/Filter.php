<?php
require APPPATH . '/libraries/REST_Controller.php';
/**
*
*/
class Filter extends REST_Controller
{

	function __construct() {
        parent::__construct();

    }

    // show data article category
    function catArticle_get() {
    	$this->load->model('Articlecategory_model', 'ACategory');
    	$cat['data'] = $this->ACategory->getAll();

        $name = $this->get('name');
        if($name)
        	$cat['data'] = $this->ACategory->getLike(['name'=>$name], false);

        $this->response($cat, 200);
    }

	// show data article category
    function tagArticle_get() {
    	$this->load->model('Articletag_model', 'ATag');
    	$tag['data'] = $this->ATag->getAll();

        $name = $this->get('name');
        if($name)
        	$tag['data'] = $this->ATag->getLike(['name'=>$name], false);

        $this->response($tag, 200);
    }
}
