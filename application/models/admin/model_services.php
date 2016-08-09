<?php

class Model_services extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_label_services(){
		$query = $this->db->query("SELECT * FROM label_services");
		return $query;
	}

	function get_services_services(){
		$query = $this->db->query("SELECT * FROM services_services");
		return $query;
	}

	// INSERT FUNCTION QUERY

	function insert_services_services($id_services, $title_en, $title_id, $desc_en, $desc_id, $icon, $status){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$icon = $this->db->escape_str($icon);
		if($id_services == ""){
			$this->db->query("INSERT INTO services_services(title_en, title_id, desc_en, desc_id, icon, status) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind', '$icon', '$status')");
		}else{
			$this->db->query("UPDATE services_services SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', icon = '$icon', status = '$status' WHERE id_services_services = '$id_services'");
		}
	}	

	public function insert_label_services($id_label, $position, $label_en, $label_id){
	 	if($id_label == ""){
            $this->db->query("insert into label_services (position,label_en,label_id) values ('$position','$label_en','$label_id')");
        }else{
        	$this->db->query("update label_services set position = '$position',label_en = '$label_en',label_id = '$label_id' where id_label_services = '$id_label'");
        }
    }

	// DELETE FUNCTION
	function delete_label_services($id_label_services){

                $this->db->query("DELETE FROM label_services WHERE id_label_services = '$id_label_services'");
        }

	function delete_services_services($id_services){
		$this->db->query("DELETE FROM services_services WHERE id_services_services = '$id_services'");
	}
}

?>