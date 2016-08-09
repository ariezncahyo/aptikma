<?php

class Model_aboutus extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_banner_aboutus(){
		$query = $this->db->query("SELECT * FROM banner_aboutus");
		return $query;
	}

	function get_label_aboutus(){
		$query = $this->db->query("SELECT * FROM label_aboutus");
		return $query;
	}

	function get_ourgoal_aboutus(){
		$query = $this->db->query("SELECT * FROM ourgoal_aboutus");
		return $query;
	}

	function get_ourskill_aboutus(){
		$query = $this->db->query("SELECT * FROM ourskill_aboutus");
		return $query;
	}

	function get_skillvalue_aboutus(){
		$query = $this->db->query("SELECT * FROM skillvalue_aboutus");
		return $query;
	}

	function get_whychoose_aboutus(){
		$query = $this->db->query("SELECT * FROM whychoose_aboutus");
		return $query;
	}

	// INSERT FUNCTION QUERY
	function insert_banner_aboutus($id_banner, $image){
		if($id_banner == ""){
			$this->db->query("INSERT INTO banner_aboutus(image) VALUES ('$image')");
		}else{
			$this->db->query("UPDATE banner_aboutus SET image = '$image' WHERE id_banner_aboutus = '$id_banner'");
		}
	}

	public function insert_label_aboutus($id_label, $position,$label_en,$label_id){
	 	if($id_label == ""){
            $this->db->query("insert into label_aboutus (position,label_en,label_id) values ('$position','$label_en','$label_id')");
        }else{
        	$this->db->query("update label_aboutus set position = '$position',label_en = '$label_en',label_id = '$label_id' where id_label_aboutus = '$id_label'");
        }
    }

	function insert_ourgoal_aboutus($id_ourgoal, $title_en, $title_id, $desc_en, $desc_id, $icon){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$icons = $this->db->escape_str($icon);
		if($id_ourgoal == ""){
			$this->db->query("INSERT INTO ourgoal_aboutus(title_en, title_id, desc_en, desc_id, icon) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind', '$icons')");
		}else{
			$this->db->query("UPDATE ourgoal_aboutus SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', icon = '$icon' WHERE id_ourgoal_aboutus = '$id_ourgoal'");
		}
	}

	function insert_ourskill_aboutus($id_ourskill, $title_en, $title_id, $desc_en, $desc_id){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		if($id_ourskill == ""){
			$this->db->query("INSERT INTO ourskill_aboutus(title_en, title_id, desc_en, desc_id) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind')");
		}else{
			$this->db->query("UPDATE ourskill_aboutus SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind' WHERE id_ourskill_aboutus = '$id_ourskill'");
		}
	}

	function insert_skillvalue_aboutus($id_skillvalue, $title_en, $title_id, $value){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$values = $this->db->escape_str($value);
		if($id_skillvalue == ""){
			$this->db->query("INSERT INTO skillvalue_aboutus(title_en, title_id, value) VALUES ('$title_eng', '$title_ind', '$values')");
		}else{
			$this->db->query("UPDATE skillvalue_aboutus SET title_en = '$title_eng', title_id = '$title_ind', value = '$values' WHERE  id_skillvalue_aboutus = '$id_skillvalue'");
		}
	}	

	function insert_whychoose_aboutus($id_whychoose, $title_en, $title_id, $desc_en, $desc_id, $image){
		$title_eng = $this->db->escape_str($title_en);
		$title_ind = $this->db->escape_str($title_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		$images = $this->db->escape_str($image);
		if($id_whychoose == ""){
			$this->db->query("INSERT INTO whychoose_aboutus(title_en, title_id, desc_en, desc_id, image) VALUES ('$title_eng', '$title_ind', '$desc_eng', '$desc_ind', '$images')");
		}else{
			$this->db->query("UPDATE whychoose_aboutus SET title_en = '$title_eng', title_id = '$title_ind', desc_en = '$desc_eng', desc_id = '$desc_ind', image = '$images' WHERE id_whychoose_aboutus = '$id_whychoose'");
		}
	}	

	// DELETE FUNCTION
	function delete_banner_aboutus($id_banner){
		$this->db->query("DELETE FROM banner_aboutus WHERE id_banner_aboutus = '$id_banner'");
	}

	function delete_label_aboutus($id_label_aboutus){

        $this->db->query("DELETE FROM label_aboutus WHERE id_label_aboutus = '$id_label_aboutus'");
        }

	function delete_ourgoal_aboutus($id_ourgoal){
		$this->db->query("DELETE FROM ourgoal_aboutus WHERE id_ourgoal_aboutus = '$id_ourgoal'");
	}

	function delete_ourskill_aboutus($id_ourskill){
		$this->db->query("DELETE FROM ourskill_aboutus WHERE id_ourskill_aboutus = '$id_ourskill'");
	}

	function delete_skillvalue_aboutus($id_skillvalue){
		$this->db->query("DELETE FROM skillvalue_aboutus WHERE id_skillvalue_aboutus = '$id_skillvalue'");
	}

	function delete_whychoose_aboutus($id_whychoose){
		$this->db->query("DELETE FROM whychoose_aboutus WHERE id_whychoose_aboutus = '$id_whychoose'");
	}

}

?>