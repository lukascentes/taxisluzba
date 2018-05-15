<?php


class sluzby extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('služby');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }


}