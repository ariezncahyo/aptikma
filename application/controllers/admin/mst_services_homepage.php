<?php

class Mst_services_homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_homepage");
	}

	function index(){
		$data["services_homepage"] = $this->model_homepage->get_services_homepage()->result();
		$this->load->view("admin/mst_services_homepage", $data);
	}

	function insert_services_homepage(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_services = $this->input->post("id_services_homepage");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$icon = $this->input->post("icon");
			$status_homepage = $this->input->post("status");
			$this->model_homepage->insert_services_homepage($id_services, $title_en, $title_id, $desc_en, $desc_id, $icon, $status_homepage);

			if($id_services == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "services_homepage"=>$this->model_homepage->get_services_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_services_homepage(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_services = $this->input->post("id_services_homepage");
			$this->model_homepage->delete_services_homepage($id_services);

			if($id_services == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "services_homepage"=>$this->model_homepage->get_services_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>