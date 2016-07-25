<?php

class label_aboutus_model extends CI_Model {
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
        $this->db->insert('label_aboutus', $data);
    }
    
    public function listlabel(){
        $query=$this->db->query("SELECT * FROM label_aboutus");
        return $query;
    }

    public function update($position, $label_en, $label_id, $id_label_aboutus){
        $this->db->query("UPDATE label_aboutus SET position = '$position', label_en = '$label_en', label_id = '$label_id' WHERE id_label_aboutus='$id_label_aboutus'");
    }
}

?>