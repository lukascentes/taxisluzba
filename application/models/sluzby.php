<?php


class sluzby extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('služby');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function addPost($data){
        return $this->db->insert('služby', $data);
    }

    public function getSinglePosts($ID) {
        $query = $this->db->get_where('služby', array('ID'=>$ID));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }
    public function updatePost($data, $ID) {
        return $this->db->where('ID',$ID)->update('služby', $data);
    }
    public function deletePosts($ID){
        return $this->db->delete('služby',['ID'=>$ID]);
    }
}
?>