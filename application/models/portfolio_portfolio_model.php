<?php

class portfolio_portfolio_model extends CI_Model {    
    public function listportfolio(){
        $query=$this->db->query("SELECT portfolio_portfolio.*, category_portfolio.category FROM portfolio_portfolio, category_portfolio WHERE portfolio_portfolio.category = category_portfolio.id_category_portfolio");
        return $query;
    }
}

?>