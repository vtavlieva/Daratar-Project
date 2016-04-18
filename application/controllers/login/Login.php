<?php
require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    public function user_post(){
        $password=$this->post('password');
        $username=$this->post('username');
        $this->load->model('login/Login_Model');
        $result=$this->Login_Model->login($username,$password);
        if($result){
            foreach($result as $row){
                $sess_array=array(
                    'id'=>$row->id,
                    'username'=>$row->username
                );
            }
        }else{
            $this->response($result);
        }
        $this->session->set_userdata('logged_in',$sess_array);
        $this->response($sess_array);         
    }
}