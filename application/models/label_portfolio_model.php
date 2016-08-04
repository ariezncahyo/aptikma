<?php

class label_portfolio_model extends CI_Model {    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_portfolio");
        return $query;
    }
}

?>