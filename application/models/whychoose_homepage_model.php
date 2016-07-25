<?php

class whychoose_homepage_model extends CI_Model {
    public function insert($title_en, $title_id, $desc_en, $desc_id, $image)
    {
        $data = array (
            'title_en' => $title_en,
            'title_id' => $title_id,
            'desc_en' => $title_en,
            'desc_id' => $title_id,            
            'image' => $image        
        );
        $this->db->insert('whychoose_homepage', $data);
    }
    
    public function listwhychoose(){
        $query=$this->db->query("SELECT * FROM whychoose_homepage");
        return $query;
    }

    public function update($title_en, $title_id, $desc_en, $desc_id, $value, $id_whychoose_homepage){
        $this->db->query("UPDATE whychoose_homepage SET title_en = '$title_en', title_id = '$title_id', desc_en = '$desc_en', desc_id = '$desc_id', image = '$image' WHERE id_whychoose_homepage='$id_whychoose_homepage'");
    }
}

?>