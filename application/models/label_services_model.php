<?php

class label_services_model extends CI_Model {
    public function insert($position, $label_en, $label_id)
    {
        $data = array (
            'position' => $position,
            'label_en' => $label_en,
            'label_id' => $label_id,
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('label_services', $data);
    }
    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_services");
        return $query;
    }

    public function update($position, $label_en, $label_id, $id_label_services){
        $this->db->query("UPDATE label_services SET position = '$position', label_en = '$label_en', label_id = '$label_id' WHERE id_label_services='$id_label_services'");
    }
}

?>