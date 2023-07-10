<?php

class AdminVideoModel extends CI_Model{

    public function getAllData(){
        return $this->db->order_by('id','DESC')->get('video')->result_array();
    }
    public function insertNews($data){
        $this->db->insert('video',$data);
    }
    public function deleteNews($id){
        $this->db->where('id',$id)->delete('video');
    }
    public function updateNews($id,$data){
        $this->db->where('id',$id)->update('video',$data);
    }
    public function getSingleData($id){
        return $this->db->where('id',$id)->get('video')->row_array();
    }
}