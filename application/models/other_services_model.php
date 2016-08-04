<?php

class other_services_model extends CI_Model {
    public function listother(){
        $query=$this->db->query("SELECT * FROM other_services");
        return $query;
    }
}

?>