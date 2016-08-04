<?php

class summary_services_model extends CI_Model {
    public function insert($desc_en, $desc_id, $image)
    {
        $data = array (
            'desc_en' => $desc_en,
            'desc_id' => $desc_id,
            'image' => $image
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('summary_services', $data);
    }
    
    public function listsummary(){
        $query=$this->db->query("SELECT * FROM summary_services");
        return $query;
    }

    public function update($position, $label_en, $label_id, $id_label_aboutus){
        $this->db->query("UPDATE label_aboutus SET position = '$position', label_en = '$label_en', label_id = '$label_id' WHERE id_label_aboutus='$id_label_aboutus'");
    }
}

?>