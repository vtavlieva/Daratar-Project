<?php
Class Library_Model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function findAll($limit, $offset){
        $this->db->select("*");
        $this->db->from("books");
        $this->db->order_by("publish_date","desc");
        $this->db->limit($limit);
        $this->db->offset($offset);
        $result=$this->db->get();
        return $result->result_array();
    }
    public function numAll(){
        $this->db->select("*");
        $this->db->from("books");
        $result=$this->db->get()->num_rows();
        return $result;
    }
    public function insert($data){
        $query=$this->db->insert("books",$data);
        return $query;
    }
    public function delete($id){
        $this->db->where("id", $id);
        $query=$this->db->delete("books"); 
        return $query;
    }
    public function search($searchedInfo){
        $this->db->select("*");
        $this->db->from("books");
        $this->db->like("title",$searchedInfo);
        $result=$this->db->get();
        return $result->result_array();
    }
}