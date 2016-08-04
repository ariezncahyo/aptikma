<?php

class menu_homepage_model extends CI_Model {    
    public function listmenu(){
        $query=$this->db->query("SELECT * FROM menu_homepage");
        return $query;
    }
}

?>