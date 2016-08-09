<?php

	class Model_message extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// FUNGSI AMBIL DATA
		function get_message(){
			$query = $this->db->query("SELECT * FROM message");
			return $query;
		}

		//FUNGSI DELETE
		function delete_message($id_message){
			$this->db->query("DELETE FROM message WHERE id_message = '$id_message'");
		}
	}
?>