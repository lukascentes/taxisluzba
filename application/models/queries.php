<?php
class queries extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('taxikári');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function addPost($data){
            return $this->db->insert('taxikári', $data);
    }

    public function getSinglePosts($id) {
        $query = $this->db->get_where('taxikári', array('id'=>$id));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }


        public function updatePost($data, $id) {
         return $this->db->where('id',$id)->update('taxikári', $data);
        }

}


?>