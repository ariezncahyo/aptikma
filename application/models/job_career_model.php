<?php

class job_career_model extends CI_Model {    
    public function listjob(){
        $query=$this->db->query("SELECT * FROM job_career");
        return $query;
    }
}

?>