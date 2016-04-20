<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class See extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Library_Model');
    }
    
    public function index(){
        if($this->session->userdata('logged_in')){
            $config['base_url']=  base_url().'index.php/see/index/';
            $config['per_page']=3;
            $config['num_links']=3;
            $config['total_rows']=$this->Library_Model->numAll();
            $this->pagination->initialize($config);
            $data['books']=$this->Library_Model->findAll($config['per_page'], $this->uri->segment(3));
            
        }
        $this->load->view('templates/header');
        $this->load->view('pages/see',$data);
        $this->load->view('templates/footer');
    }
    public function searchedRes_post(){
        $searchedInfo=$this->input->post("search");
        $data['searchedRes']=$this->Library_Model->search($searchedInfo);
        $this->load->view('templates/header');
        $this->load->view('pages/searchedRes',$data);
        $this->load->view('templates/footer');
    }
}

          