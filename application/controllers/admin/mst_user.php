<?php

	class Mst_user extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_user");
			$this->load->helper('form');
		}

		function index(){
			$data["user"] = $this->model_user->get_user()->result();
			$this->load->view("admin/mst_user",$data);
		}

		function insert_user(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_user = $this->input->post("id_user");
				$fullname = $this->input->post("fullname");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$email = $this->input->post("email");
				$description = $this->input->post("description");
				$photo = $this->input->post("photo");
				$this->model_user->insert_user($id_user, $fullname, $username, $password, $email, $description, $photo);
				if($id_user == ""){
					$status = "Insert Data Successful";
				}else{
					$status = "Update Data Successful";
					$this->session->set_userdata('id_user', $id_user);
					$this->session->set_userdata('fullname', $fullname);
					$this->session->set_userdata('username', $username);
					$this->session->set_userdata('password', $password);
					$this->session->set_userdata('email', $email);
					$this->session->set_userdata('description', $description);
					$this->session->set_userdata('photo', $photo);					
				}

				$data = array("status"=>$status, "user"=>$this->model_user->get_user()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_user(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_user = $this->input->post("id_user");
				$username = $this->input->post("username");
				$this->model_user->delete_user($id_user,$username);
				if($id_user == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "user"=>$this->model_user->get_user()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>