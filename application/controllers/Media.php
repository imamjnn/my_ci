<?php

if(!defined('BASEPATH'))
    die;

class Media extends MY_Controller
{
    function __construct(){
        parent::__construct();
        
    }

    function uploadFile(){
        $this->load->library('upload');
        $this->load->model('Media_model', 'Media');

        $newdir = strtotime(date('H:i:s'));

        $config['upload_path']          = './media/'.$newdir;
        $config['allowed_types']        = 'gif|jpg|png';
        $config['encrypt_name']         = TRUE;
        $config['max_size']             = 1000;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);

        if(!is_dir($newdir)){
            mkdir('media/'.$newdir, 0777);
        }

        if(!$this->upload->do_upload('userfile')){
            $result['status'] = false;
            $result['message'] = array($this->upload->display_errors());
        }else{
            $data = array(
                'upload_data' => $this->upload->data()
                );
            $gbr = $this->upload->data();
            $data = array(
                'name' => $gbr['file_name'],
                'path' => '/media/'.$newdir.'/'.$gbr['file_name'],
                'orig_name' => $gbr['orig_name'],
                'created' => date('Y-m-d H:i:s')
                );
            $this->Media->create($data);

            $result['status'] = true;
            $result['message'] = $data['path'];
        }

        echo json_encode($result);
    }
    
    public function resize($dir1, $file){
        $width = null;
        $height= null;
        $ext   = 'jpg';
        $name  = null;
        
        if(preg_match('!(.+)_([0-9]*)x([0-9]*)\.([a-zA-Z]+)!', $file, $m)){
            $name  = $m[1];
            $width = $m[2];
            $height= $m[3];
            $ext   = $m[4];
        }
        
        if(!$width && !$height)
            return $this->show_404();
        
        $file_original = dirname(BASEPATH) . "/media/$dir1/$name.$ext";
        $file_requested= dirname(BASEPATH) . "/media/$dir1/$file";
        
        $this->load->library('MediaFile', '', 'media');
        if(!$this->media->resizeImage($file_original, $file_requested, $width, $height))
            return $this->show_404();
        
        $this->load->helper('file');
        $content = file_get_contents($file_requested);
        $mime = get_mime_by_extension($file_requested);
        //deb($file_original);
        
        $this->output
            ->set_status_header(200)
            ->set_content_type($mime)
            ->set_output($content)
            ->_display();
        exit;
    }
}