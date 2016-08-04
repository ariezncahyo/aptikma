<?php

class label_contactus_model extends CI_Model {
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_contactus");
        return $query;
    }
}

?>