<?php

	class Mst_company_contactus extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_contactus");
			$this->load->helper('form');
		}

		function index(){
			$data["company_contactus"] = $this->model_contactus->get_company_contactus()->result();
			$this->load->view("admin/mst_company_contactus",$data);
		}

		function insert_company(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_company = $this->input->post("id_company_contactus");
				$name = $this->input->post("name");
				$address = $this->input->post("address");
				$phone = $this->input->post("phone");
				$email = $this->input->post("email");
				$coordinate = $this->input->post("coordinate");
				$this->model_contactus->insert_company_contactus($id_company, $name, $address, $phone, $email, $coordinate);

				if($id_company == ""){
					$status = "Insert Data Successful";
				}else{
					$status = "Update Data Successful";
				}

				$data = array("status"=>$status, "company_contactus"=>$this->model_contactus->get_company_contactus()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_company(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_company = $this->input->post("id_company_contactus");
				$this->model_contactus->delete_company_contactus($id_company);
				if($id_company == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "company_contactus"=>$this->model_contactus->get_company_contactus()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>