<?php
class Register_Model extends CI_Model{
    public function set_reg($data){
        return $this->db->insert('users',$data);
    }
}