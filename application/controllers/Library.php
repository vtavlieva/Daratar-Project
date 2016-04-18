<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
        }
        $this->load->view('templates/header');
        $this->load->view('pages/library',$data);
        $this->load->view('templates/footer');
    }
}