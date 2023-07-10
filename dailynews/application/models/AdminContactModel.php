<?php

class AdminContactModel extends CI_Model{

    public function getAllData(){
        return $this->db->order_by('id','DESC')->get('contact')->result_array();
    }
    public function insertNews($data){
        $this->db->insert('contact',$data);
    }
    public function deleteNews($id){
        $this->db->where('id',$id)->delete('contact');
    }
    public function updateNews($id,$data){
        $this->db->where('id',$id)->update('contact',$data);
    }
    public function getSingleData($id){
        return $this->db->where('id',$id)->get('contact')->row_array();
    }
}