<?php

class contact_homepage_model extends CI_Model {
    public function insert($name_en, $name_id, $value)
    {
        $data = array (
            'name_en' => $name_en,
            'name_id' => $name_id,
            'value' => $value        
        );
        $this->db->insert('contact_homepage', $data);
    }
    
    public function listcontact(){
        $query=$this->db->query("SELECT * FROM contact_homepage");
        return $query;
    }

    public function update($name_en, $name_id, $value, $id_contact_homepage){
        $this->db->query("UPDATE contact_homepage SET name_en = '$name_en', name_id = '$name_id', value = '$value' WHERE id_contact_homepage='$id_contact_homepage'");
    }
}

?>