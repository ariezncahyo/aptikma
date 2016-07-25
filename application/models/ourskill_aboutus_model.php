<?php

class ourskill_aboutus_model extends CI_Model {
    public function insert($title_en, $title_id, $desc_en, $desc_id)
    {
        $data = array (
            'title_en' => $title_en,
            'title_id' => $title_id,
            'desc_en' => $desc_en,
            'desc_id' => $desc_id
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('ourskill_aboutus', $data);
    }
    
    public function listourskill(){
        $query=$this->db->query("SELECT * FROM ourskill_aboutus");
        return $query;
    }

    public function update($title_en, $title_id, $desc_en, $desc_id, $id_ourskill_aboutus){
        $this->db->query("UPDATE ourskill_aboutus SET title_en = '$title_en', title_id = '$title_id', desc_en = '$desc_en', desc_id = '$desc_id' WHERE id_ourskill_aboutus='$id_ourskill_aboutus'");
    }
}

?>