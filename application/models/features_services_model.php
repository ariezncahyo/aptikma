<?php

class features_services_model extends CI_Model {
    public function listfeatures(){
        $query=$this->db->query("SELECT * FROM features_services");
        return $query;
    }
}

?>