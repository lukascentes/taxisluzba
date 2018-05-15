<?php

class auta extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('autá');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function addPost($data){
        return $this->db->insert('autá', $data);
    }
    public function getSinglePosts($ID) {
        $query = $this->db->get_where('autá', array('ID'=>$ID));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }
    public function updatePost($data, $ID) {
        return $this->db->where('ID',$ID)->update('autá', $data);
    }


}