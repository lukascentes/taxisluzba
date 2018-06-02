<?php

class jazdy extends CI_Model {

    public function getPosts() {
        $query = $this->db
            ->join('autá', '`autá`.`ID` = `jazdy`.`ID_autá`')
            ->join('taxikári', '`taxikári`.`ID` = `jazdy`.`ID_taxikári`')
            ->get('jazdy');
        if($query -> num_rows() > 0) {
            return $query -> result();
        }

    }

    public function addPost($data){
        return $this->db->insert('jazdy', $data);
    }

    public function getSinglePosts($ID) {
        $query = $this->db
            ->join('autá', '`autá`.`ID` = `jazdy`.`ID_autá`')
            ->join('taxikári', '`taxikári`.`ID` = `jazdy`.`ID_taxikári`')
            ->get_where('jazdy', array('jazdy.ID'=>$ID));
        if($query->num_rows() >0) {
            return $query->row();
        }
    }
    public function updatePost($data, $ID) {
        return $this->db->where('ID',$ID)->update('jazdy', $data);
    }

    public function deletePosts($ID){
        return $this->db->delete('jazdy',['ID'=>$ID]);
    }

}
?>