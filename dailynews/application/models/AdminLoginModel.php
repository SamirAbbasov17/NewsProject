<?php

class AdminLoginModel extends CI_Model{

    public function getAllData(){
        return $this->db->order_by('id','DESC')->get('admin_list')->result_array();
    }
    public function insertNews($data){
        $this->db->insert('admin_list',$data);
    }
    public function deleteNews($id){
        $this->db->where('id',$id)->delete('admin_list');
    }
    public function updateNews($id,$data){
        $this->db->where('id',$id)->update('admin_list',$data);
    }
    public function getSingleData($id){
        return $this->db->where('id',$id)->get('admin_list')->row_array();
    }
}