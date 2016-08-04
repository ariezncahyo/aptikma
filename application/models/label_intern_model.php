<?php

class label_intern_model extends CI_Model {    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_intern");
        return $query;
    }
}

?>