<?php

class page_intern_model extends CI_Model {    
    public function listpage(){
        $query=$this->db->query("SELECT * FROM page_intern");
        return $query;
    }
}

?>