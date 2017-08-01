<?php

if(!defined('BASEPATH'))
    die;

class MediaFile
{
    private $CI;
    
    function __construct(){
        $this->CI =&get_instance();
        
    }
    
    public function resizeImage($original, $target, $width=0, $height=0){
        if(!file_exists($original))
            return false;
        if(file_exists($target))
            return true;
        
        if(!$width && !$height)
            return false;
        
        $this->CI->load->library('image_lib');
        
        list($ori_width, $ori_height) = getimagesize($original);
        
        $tar_width = $width  ? $width  : ceil( $ori_height * $height / $ori_width );
        $tar_height= $height ? $height : ceil( $ori_width  * $width  / $ori_height);
        
        $v_fact = $height / $ori_height;
        $h_fact = $width / $ori_width;
        
        $im_fact = max($v_fact, $h_fact);
        
        $resize_height = ceil($ori_height * $im_fact);
        $resize_width  = ceil($ori_width  * $im_fact);
        
        if(!$height)
            $tar_height = $resize_height;
        if(!$width)
            $tar_width  = $resize_width;
        
        $config['image_library']    = 'gd2';
        $config['source_image']     = $original;
        $config['new_image']        = $target;
        $config['quality']          = '90%';
        $config['maintain_ratio']   = TRUE;
        $config['width']            = $resize_width;
        $config['height']           = $resize_height;
        
        $this->CI->image_lib->initialize($config);
        if(!$this->CI->image_lib->resize())
            return false;
        
        if($tar_width == $resize_width && $tar_height == $resize_height)
            return true;
        
        $config['source_image']     = $target;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = FALSE;
        $config['x_axis']           = $tar_width  < $resize_width  ? ceil( $resize_width / 2 - ( $tar_width / 2 ) ) : 0;
        $config['y_axis']           = $tar_height < $resize_height ? ceil( $resize_height / 2 - ( $tar_height / 2 ) ) : 0;
        $config['width']            = $tar_width;
        $config['height']           = $tar_height;
        
        $this->CI->image_lib->initialize($config);
        if(!$this->CI->image_lib->crop())
            return false;
        return true;
    }
}