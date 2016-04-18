<?php
require APPPATH . '/libraries/REST_Controller.php';

class Register extends REST_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function user_post(){
        $this->load->model('registration/Register_Model');
        $message=array(
            'name'=>  set_value('name'),
            'surname'=>set_value('surname'),
            'family'=>set_value('family'),
            'email'=>set_value('email'),
            'username'=>set_value('username'),
            'password'=>md5(set_value('password'))
        );
        $result=$this->Register_Model->set_reg($message);
        $this->response($result); 
    }
}