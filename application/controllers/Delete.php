<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Library_Model');
    }
    
    public function index(){
        if($this->session->userdata('logged_in')){
            $config['base_url']=  base_url().'index.php/See/index/';
            $config['per_page']=3;
            $config['num_links']=3;
            $config['total_rows']=$this->Library_Model->numAll();
            $this->pagination->initialize($config);
            $data['books']=$this->Library_Model->findAll($config['per_page'], $this->uri->segment(3));
            
        }
        $this->load->view('templates/header');
        $this->load->view('pages/delete',$data);
        $this->load->view('templates/footer');
    }
    public function deleteFromLibrary(){
        $id=$this->input->post("id");
        $result=$this->Library_Model->delete($id);
    }
}
