<?php

class Model_contactus extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_label_contactus(){
		$query = $this->db->query("SELECT * FROM label_contactus");
		return $query;
	}

	function get_company_contactus(){
		$query = $this->db->query("SELECT * FROM company_contactus");
		return $query;
	}

	// INSERT FUNCTION QUERY

	function insert_company_contactus($id_company, $name, $address, $phone, $email, $coordinate){
		$names = $this->db->escape_str($name);
		$addresss = $this->db->escape_str($address);
		$phones = $this->db->escape_str($phone);
		$emails = $this->db->escape_str($email);
		$coordinates = $this->db->escape_str($coordinate);
		if($id_company == ""){
			$this->db->query("INSERT INTO company_contactus(name, address, phone, email, coordinate) VALUES ('$names', '$addresss', '$phones', '$emails', '$coordinates')");
		}else{
			$this->db->query("UPDATE company_contactus SET name = '$names', address = '$addresss', phone = '$phones', email = '$emails', coordinate = '$coordinates'WHERE id_company_contactus = '$id_company'");
		}
	}	

	public function insert_label_contactus($id_label, $position, $label_en, $label_id){
	 	if($id_label == ""){
            $this->db->query("insert into label_contactus (position,label_en,label_id) values ('$position','$label_en','$label_id')");
        }else{
        	$this->db->query("update label_contactus set position = '$position',label_en = '$label_en',label_id = '$label_id' where id_label_contactus = '$id_label'");
        }
    }

	// DELETE FUNCTION
	function delete_label_contactus($id_label_contactus){

                $this->db->query("DELETE FROM label_contactus WHERE id_label_contactus = '$id_label_contactus'");
        }

	function delete_company_contactus($id_company){
		$this->db->query("DELETE FROM company_contactus WHERE id_company_contactus = '$id_company'");
	}
}

?>