<?php

class seo_homepage_model extends CI_Model {
    public function insert($meta_tag_en, $meta_keyword_en, $meta_desc_en, $meta_tag_id, $meta_keyword_id, $meta_desc_id){
        $data = array (
            'meta_tag_en' => $meta_tag_en,
            'meta_keyword_en' => $meta_keyword_en,
            'meta_desc_en' => $meta_desc_en,
            'meta_tag_id' => $meta_tag_id,
            'meta_keyword_id' => $meta_keyword_id,
            'meta_desc_id' => $meta_desc_id,
            //'user_register'=>date("Y-m-d h:i:sa"),
            //'user_last_login'=>date("Y-m-d h:i:sa")
            //'user_jumlah_post'=>0,
            //'validasi'=>0            
        );
        $this->db->insert('seo_homepage', $data);
    }
    
    public function listseo(){
        $query=$this->db->query("SELECT * FROM seo_homepage");
        return $query;
    }

    public function update($meta_tag_en, $meta_keyword_en, $meta_desc_en, $meta_tag_id, $meta_keyword_id, $meta_desc_id, $id_seo_homepage){
        $this->db->query("UPDATE seo_homepage SET meta_tag_en = '$meta_tag_en', meta_keyword_en = '$meta_keyword_en', meta_desc_en = '$meta_desc_en', meta_tag_id = '$meta_tag_id', meta_keyword_id = '$meta_keyword_id', meta_desc_id = '$meta_desc_id' WHERE id_seo_homepage='$id_seo_homepage'");
    }
}

?>