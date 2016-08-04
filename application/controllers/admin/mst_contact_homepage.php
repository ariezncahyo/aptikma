<?php

	class Mst_contact_homepage extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_homepage");
			$this->load->helper('form');
		}

		function index(){
			$data["contact_homepage"] = $this->model_homepage->get_contact_homepage()->result();
			$this->load->view("admin/mst_contact_homepage",$data);
		}

		function insert_contact(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_contact = $this->input->post("id_contact_homepage");
				$name_en = $this->input->post("name_en");
				$name_id = $this->input->post("name_id");
				$value = $this->input->post("value");
				$this->model_homepage->insert_contact_homepage($id_contact, $name_en, $name_id, $value);

				if($id_contact == ""){
					$status = "Insert Data Successfull";
				}else{
					$status = "Update Data Successfull";
				}

				$data = array("status"=>$status, "contact_homepage"=>$this->model_homepage->get_contact_homepage()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_contact(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_contact = $this->input->post("id_contact_homepage");
				$this->model_homepage->delete_contact_homepage($id_contact);
				if($id_contact == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successfull";
				}
				$data = array("status"=>$status, "contact_homepage"=>$this->model_homepage->get_contact_homepage()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>