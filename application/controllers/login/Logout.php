<?php
class Logout extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function logout(){
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect( base_url(), 'refresh');
    }
}