<?php

class Mst_services_services extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_services");
	}

	function index(){
		$data["services_services"] = $this->model_services->get_services_services()->result();
		$this->load->view("admin/mst_services_services", $data);
	}

	function insert_services_services(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_services = $this->input->post("id_services_services");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$icon = $this->input->post("icon");
			$status_services = $this->input->post("status");
			$this->model_services->insert_services_services($id_services, $title_en, $title_id, $desc_en, $desc_id, $icon, $status_services);

			if($id_services == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "services_services"=>$this->model_services->get_services_services()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_services_services(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_services = $this->input->post("id_services_services");
			$this->model_services->delete_services_services($id_services);

			if($id_services == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "services_services"=>$this->model_services->get_services_services()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>