<?php

class jazdy extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('jazdy');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function addPost($data){
        return $this->db->insert('jazdy', $data);
    }

    public function getSinglePosts($ID) {
        $query = $this->db->get_where('jazdy', array('ID'=>$ID));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }
    public function updatePost($data, $ID) {
        return $this->db->where('ID',$ID)->update('jazdy', $data);
    }



}