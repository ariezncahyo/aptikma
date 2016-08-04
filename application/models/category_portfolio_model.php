<?php

class category_portfolio_model extends CI_Model {    
    public function listcategory(){
        $query=$this->db->query("SELECT * FROM category_portfolio");
        return $query;
    }
}

?>