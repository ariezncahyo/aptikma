<?php

class label_blog_model extends CI_Model {    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_blog");
        return $query;
    }
}

?>