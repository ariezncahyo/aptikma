<?php

class Model_homepage extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_banner_homepage(){
		$query = $this->db->query("SELECT * FROM banner_homepage");
		return $query;
	}

	function get_contact_homepage(){
		$query = $this->db->query("SELECT * FROM contact_homepage");
		return $query;
	}

	function get_seo_homepage(){
		$query = $this->db->query("SELECT * FROM seo_homepage");
		return $query;
	}

	function get_label_homepage(){
		$query = $this->db->query("SELECT * FROM label_homepage");
		return $query;
	}

	function get_services_homepage(){
		$query = $this->db->query("SELECT * FROM services_homepage");
		return $query;
	}

	function get_vission_homepage(){
		$query = $this->db->query("SELECT * FROM vission_homepage");
		return $query;
	}

	function get_whychoose_homepage(){
		$query - $this->db->query("SELECT * FROM whychoose_homepage");
		return $query;
	}

	// INSERT FUNCTION QUERY
	function insert_banner_homepage($id_banner, $name_en, $name_id, $desc_en, $desc_id, $photo, $url_link, $status){
		$name_eng = $this->db->escape_str($name_en);
		$name_ind = $this->db->escape_str($name_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$url_links = $this->db->escape_str($url_link);
		if($id_banner == ""){
			$this->db->query("INSERT INTO banner_homepage(name_en, name_id, desc_en, desc_id, photo, urL_link, status) VALUES ('$name_eng', '$name_ind', '$desc_eng', '$desc_ind', '$photo', '$url_links','$status')");
		}else{
			$this->db->query("UPDATE banner_homepage SET name_en = '$name_eng', name_id = '$name_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', photo = '$photo', url_link = '$url_link', status = '$status' WHERE id_banner_homepage = '$id_banner'");
		}
	}

	function insert_contact_homepage($id_contact, $name_en, $name_id, $value){
		$name_eng = $this->db->escape_str($name_en);
		$name_ind = $this->db->escape_str($name_id);
		$values = $this->db->escape_str($value);
		if($id_contact == ""){
			$this->db->query("INSERT INTO contact_homepage(name_en, name_id, value) VALUES ('$name_eng', '$name_ind', '$values')");
		}else{
			$this->db->query("UPDATE contact_homepage SET name_en = '$name_eng', name_id = '$name_ind', value = '$values' WHERE  id_contact_homepage = '$id_contact'");
		}
	}
	
	function insert_seo_homepage($id_seo, $meta_tag_en, $meta_tag_id, $meta_keyword_en, $meta_keyword_id, $meta_desc_en, $meta_desc_id){
		$meta_tag_eng = $this->db->escape_str($meta_tag_en);
		$meta_tag_ind = $this->db->escape_str($meta_tag_id);
		$meta_keyword_eng = $this->db->escape_str($meta_keyword_en);
		$meta_keyword_ind = $this->db->escape_str($meta_keyword_id);
		$meta_desc_eng = $this->db->escape_str($meta_desc_en);
		$meta_desc_ind = $this->db->escape_str($meta_desc_id);
		if($id_seo == ""){
			$this->db->query("INSERT INTO seo_homepage(meta_tag_en, meta_tag_id, meta_keyword_en, meta_keyword_id, meta_desc_en, meta_desc_id) VALUES ('$meta_tag_eng', '$meta_tag_ind', '$meta_keyword_eng', '$meta_keyword_ind', '$meta_desc_eng', '$meta_desc_ind')");
		}else{
			$this->db->query("UPDATE seo_homepage SET meta_tag_en = '$meta_tag_eng', meta_tag_id = '$meta_tag_ind', meta_keyword_en = '$meta_keyword_eng', meta_keyword_id = '$meta_keyword_ind', meta_desc_en = '$meta_desc_eng', meta_desc_id = '$meta_desc_ind' WHERE  id_seo_homepage = '$id_seo'");
		}
	}

	function insert_services_homepage($id_services, $title_en, $title_id, $desc_en, $desc_id, $icon, $status){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$icon = $this->db->escape_str($icon);
		if($id_services == ""){
			$this->db->query("INSERT INTO services_homepage(title_en, title_id, desc_en, desc_id, icon, status) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind', '$icon', '$status')");
		}else{
			$this->db->query("UPDATE services_homepage SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', icon = '$icon', status = '$status' WHERE id_services_homepage = '$id_services'");
		}
	}	

	public function insert_label_homepage($id_label, $position,$label_en,$label_id){
	 	if($id_label == ""){
            $this->db->query("insert into label_homepage (position,label_en,label_id) values ('$position','$label_en','$label_id')");
        }else{
        	$this->db->query("update label_homepage set position = '$position',label_en = '$label_en',label_id = '$label_id' where id_label_homepage = '$id_label'");
        }
    }

	// DELETE FUNCTION
	function delete_banner_homepage($id_banner){
		$this->db->query("DELETE FROM banner_homepage WHERE id_banner_homepage = '$id_banner'");
	}

	function delete_contact_homepage($id_contact){
		$this->db->query("DELETE FROM contact_homepage WHERE id_contact_homepage = '$id_contact'");
	}

	function delete_label_homepage($id_label_homepage){

                $this->db->query("DELETE FROM label_homepage WHERE id_label_homepage = '$id_label_homepage'");
        }

	function delete_seo_homepage($id_seo_homepage){

                $this->db->query("DELETE FROM seo_homepage WHERE id_seo_homepage = '$id_seo_homepage'");
        }        

	function delete_services_homepage($id_services){
		$this->db->query("DELETE FROM services_homepage WHERE id_services_homepage = '$id_services'");
	}

}

?>