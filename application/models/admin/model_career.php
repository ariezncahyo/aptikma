<?php 

class Model_career extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_important_career(){
		$query = $this->db->query("SELECT * FROM important_career");
		return $query;
	}

	function get_job_career(){
		$query = $this->db->query("SELECT * FROM job_career");
		return $query;
	}

	function get_label_career(){
		$query = $this->db->query("SELECT * FROM label_career");
		return $query;
	}

	function get_requirements_career(){
		$query = $this->db->query("SELECT * FROM requirements_career");
		return $query;
	}

	function insert_important_career($id_important, $name_en, $name_id){
		$name_eng = $this->db->escape_str($name_en);
		$name_ind = $this->db->escape_str($name_id);
		if($id_important == ""){
			$this->db->query("INSERT INTO important_career (name_en, name_id) VALUES ('$name_eng', '$name_ind')");
		}else{
			$this->db->query("UPDATE important_career SET name_en = '$name_eng', name_id='$name_ind' WHERE id_important_career = '$id_important'");
		}
	}

	function insert_job_career($id_job, $name_en, $name_id, $desc_en, $desc_id){
		$name_eng = $this->db->escape_str($name_en);
		$name_ind = $this->db->escape_str($name_id);
		$desc_eng = $this->db->escape_str($desc_en);
		$desc_ind = $this->db->escape_str($desc_id);
		if($id_job == ""){
			$this->db->query("INSERT INTO job_career(name_en, name_id, desc_en, desc_id) VALUES ('$name_eng', '$name_ind', '$desc_eng', '$desc_ind')");
		}else{
			$this->db->query("UPDATE job_career SET name_en = '$name_eng', name_id = '$name_ind', desc_en = '$desc_eng', desc_id = '$desc_ind' WHERE id_job = '$id_job'");
		}
	}

	function insert_label_career($id_label, $position, $label_en, $label_id){
		$position = $this->db->escape_str($position);
		$label_eng = $this->db->escape_str($label_en);
		$label_ind = $this->db->escape_str($label_id);
		if($id_label == ""){
			$this->db->query("INSERT INTO label_career(position, label_en, label_id) VALUES ('$position', '$label_eng', '$label_ind')");
		}else{
			$this->db->query("UPDATE label_career SET position = '$position', label_en = '$label_eng', label_id = '$label_ind' WHERE id_label_career = '$id_label'");
		}
	}

	function  insert_requirement_career($id_requirements, $name_en, $name_id){
		$name_eng = $this->db->escape_str($name_en);
		$name_ind = $this->db->escape_str($name_id);
		if($id_requirements == ""){
			$this->db->query("INSERT INTO requirements_career (name_en, name_id) VALUES ('$name_eng', '$name_ind')");
		}else{
			$this->db->query("UPDATE requirements_career SET name_en = '$name_eng', name_id = '$name_ind' WHERE id_requirements_career = '$id_requirements'");
		}
	}

	function delete_important_career($id_important){
		$this->db->query("DELETE FROM important_career WHERE id_important_career = '$id_important'");
	}

	function delete_job_career($id_job){
		$this->db->query("DELETE FROM job_career WHERE id_job = '$id_job'");
	}

	function delete_label_career($id_label){
		$this->db->query("DELETE FROM label_career WHERE id_label_career = '$id_label'");
	}

	function delete_requirements_career($id_requirements){
		$this->db->query("DELETE FROM requirements_career WHERE id_requirements_career = '$id_requirements'");
	}
}

?>