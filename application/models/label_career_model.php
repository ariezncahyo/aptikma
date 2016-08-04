<?php

class label_career_model extends CI_Model {    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_career");
        return $query;
    }
}

?>