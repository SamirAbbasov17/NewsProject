<?php

class AdminModel extends CI_Model{

    public function getAllData(){
       return $this->db->order_by('id','DESC')->get('news')->result_array();
    }
    public function insertNews($data){
        $this->db->insert('news',$data);
    }
    public function deleteNews($id){
        $this->db->where('id',$id)->delete('news');
    }
    public function updateNews($id,$data){
        $this->db->where('id',$id)->update('news',$data);
    }
    public function getSingleData($id){
        return $this->db->where('id',$id)->get('news')->row_array();
    }
    public function checkAdmin($data){
        return $this->db->where($data)->Where('status','Active')->get('admin_list')->row_array();
    }
}