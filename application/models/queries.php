<?php
class queries extends CI_Model {

    public function getPosts() {
        $query = $this->db->get('taxikári');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function deletePosts($ID){
        return $this->db->delete('taxikári',['ID'=>$ID]);
    }

    public function addPost($data){
            return $this->db->insert('taxikári', $data);
    }

    public function getSinglePosts($ID) {
        $query = $this->db->get_where('taxikári', array('ID'=>$ID));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }


        public function updatePost($data, $ID) {
         return $this->db->where('ID',$ID)->update('taxikári', $data);
        }

}


?>