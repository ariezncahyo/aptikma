<?php

class blog_blog_model extends CI_Model {    
    public function listblog(){
        $query=$this->db->query("SELECT blog_blog.*,category_blog.* FROM blog_blog,category_blog WHERE blog_blog.category=category_blog.id_category_blog ORDER BY date desc");
        return $query;
    }

    /*public function latestblog(){
        $query=$this->db->query("SELECT * FROM blog_blog ORDER BY date desc ");
        return $query;

    }*/
}

?>