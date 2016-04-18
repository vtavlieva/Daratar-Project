<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Library_Model');
    }
    
    public function index(){

        $this->load->view('templates/header');
        $this->load->view('pages/add');
        $this->load->view('templates/footer');
    }
    public function addToLibrary(){
        $title=$this->input->post("title");
        $author=$this->input->post("author");
        $pages=$this->input->post("pages");
        $isbn=$this->input->post("isbn");
        $date=$this->input->post("publish_date");
        $format=$this->input->post("format");
        $resume=$this->input->post("resume");
        $image = $_FILES["image"]["name"];
        
        $path = 'assets/images/';
            if(!file_exists($path)) {
                mkdir($path,0777);
        }
        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        if($this->upload->do_upload('image')){
            $uploaded_file = $this->upload->data(); 
            $image = $uploaded_file['file_name'];
        }else{
            $this->upload->display_errors();
        }
        $data = array(
            'title' => $title ,
            'author' => $author ,
            'isbn'=> $isbn,
            'pages'=> $pages,
            'publish_date' => $date,
            'format'=> $format,
            'resume'=> $resume,
            'image'=> $image
        );


        $this->Library_Model->insert($data);
        redirect(base_url()."index.php/Add/index/");
    }
}

