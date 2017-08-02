<?php

class ObjectMeta{
	private $CI;

	function __construct(){
        $this->CI =&get_instance();
    }

    public function home(){
        $tx = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $tx.= '<meta charset="utf-8">';
        $tx.= '<title>MY CI</title>';
        return $tx;
    }

	public function single($page=array()){
        $tx = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $tx.= '<meta charset="utf-8">';
        $tx.= '<title>'.$page->name.'</title>';
        return $tx;
    }
}