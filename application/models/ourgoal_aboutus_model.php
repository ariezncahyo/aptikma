<?php

class ourgoal_aboutus_model extends CI_Model {
    public function insert($title_en, $title_id, $desc_en, $desc_id, $icon)
    {
        $data = array (
            'title_en' => $title_en,
            'title_id' => $title_id,
            'desc_en' => $desc_en,
            'desc_id' => $desc_id,            
            'icon' => $icon
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('ourgoal_aboutus', $data);
    }
    
    public function listourgoal(){
        $query=$this->db->query("SELECT * FROM ourgoal_aboutus");
        return $query;
    }

    public function update($title_en, $title_id, $desc_en, $desc_id, $icon, $id_ourgoal_aboutus){
        $this->db->query("UPDATE ourgoal_aboutus SET title_en = '$title_en', title_id = '$title_id', desc_en = '$desc_en', desc_id = '$desc_id', icon = '$icon' WHERE id_ourgoal_aboutus='$id_ourgoal_aboutus'");
    }
}

?>