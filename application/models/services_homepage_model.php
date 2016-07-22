<?php

class services_homepage_model extends CI_Model {
    public function insert($title_en, $title_id, $desc_en, $desc_id, $icon, $status)
    {
        $data = array (
            'title_en' => $title_en,
            'title_id' => $title_id,
            'desc_en' => $desc_en,
            'desc_id' => $desc_id,
            'icon' => $icon,
            'status' => $status,
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('services_homepage', $data);
    }
    
    public function listservices(){
        $query=$this->db->query("SELECT * FROM services_homepage");
        return $query;
    }

    public function update($position, $label_en, $label_id, $id_label_homepage){
        $this->db->query("UPDATE label_homepage SET position = '$position', label_en = '$label_en', label_id = '$label_id' WHERE id_label_homepage='$id_label_homepage'");
    }
}

?>