<?php

class Model_user extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//LOGIN
	public function login($username){
		$query = $this->db->query("SELECT * from user where username='$username' ");
		return $query;
	}

	public function get_user(){
		$query = $this->db->query("SELECT * from user ");
		return $query;
	}

	public function insert_user($id_user, $fullname, $username, $password, $email, $description, $photo){
		$fullnames = $this->db->escape_str($fullname);
		$usernames = $this->db->escape_str($username);
		$passwords = $this->db->escape_str($password);
		$emails = $this->db->escape_str($email);
		$descriptions = $this->db->escape_str($description);
		$photos = $this->db->escape_str($photo);
	 	if($id_user == ""){
            $this->db->query("INSERT INTO user (fullname,username,password,email,description,photo) values ('$fullnames','$usernames','$passwords','$emails','$descriptions','$photos')");
        }else{
        	$this->db->query("UPDATE user SET fullname = '$fullnames', username = '$usernames', email = '$emails', password = '$passwords', description = '$descriptions', photo = '$photo' WHERE id_user = '$id_user' ");
        }
    }

	public function delete_user($id_user, $username){
		$query = $this->db->query("DELETE FROM USER WHERE id_user = '$id_user' && username = '$username'");
	}

}

?>