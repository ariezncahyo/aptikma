<?php

class list_intern_model extends CI_Model {    
    public function listlist(){
        $query=$this->db->query("SELECT * FROM list_intern");
        return $query;
    }
}

?>