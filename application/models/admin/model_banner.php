<?php

class Model_banner extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_banner(){
		$query = $this->db->query("SELECT * FROM banner");
		return $query;
	}

	// INSERT FUNCTION QUERY
	function insert_banner($id_banner, $title, $image){
		if($id_banner == ""){
			$this->db->query("INSERT INTO banner(title, image) VALUES ('$title','$image')");
		}else{
			$this->db->query("UPDATE banner SET title = '$title', image = '$image' WHERE id_banner = '$id_banner'");
		}
	}

	// DELETE FUNCTION
	function delete_banner($id_banner){
		$this->db->query("DELETE FROM banner WHERE id_banner = '$id_banner'");
	}

}

?>