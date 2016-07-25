<?php

class skillvalue_aboutus_model extends CI_Model {
    public function insert($title_en, $title_id, $value)
    {
        $data = array (
            'title_en' => $title_en,
            'title_id' => $title_id,
            'icon' => $icon
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('skillvalue_aboutus', $data);
    }
    
    public function listskillvalue(){
        $query=$this->db->query("SELECT * FROM skillvalue_aboutus");
        return $query;
    }

    public function update($title_en, $title_id, $value, $id_skillvalue_aboutus){
        $this->db->query("UPDATE skillvalue_aboutus SET title_en = '$title_en', title_id = '$title_id', value = 'value' WHERE id_skillvalue_aboutus='$id_skillvalue_aboutus'");
    }
}

?>