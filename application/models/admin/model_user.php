<?php

class Model_user extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//LOGIN
	public function get_user($username){
		$query = $this->db->query("SELECT * from user where username='$username' ");
		return $query;
	}

	public function update_user($id_user, $fullname, $new_password, $old_password, $email, $description){
		if($new_password != ""){
			$this->db->query("UPDATE user SET fullname = '$fullname', email = '$email', password = '$new_password' description = $description WHERE id_user = '$id_user' AND password = '$old_password'");
		}else{
			$this->db->query("UPDATE user SET fullname = '$fullname', email = '$email', description = $description WHERE id_user = '$id_user'");
		}
	}

	public function update_password($id_user, $new_password, $old_password, $username){
		$this->db->query("UPDATE user SET password = '$new_password' WHERE id_user = '$id_user' AND password = '$old_password'");
	}

	public function delete_user($id_user, $username){
		$query = $this->db->query("DELETE FROM USER WHERE id_user = '$id_user' && username = '$username'");
	}

}

?>