<?php

class category_blog_model extends CI_Model {    
    public function listcategory(){
        $query=$this->db->query("SELECT * FROM category_blog");
        return $query;
    }
}

?>