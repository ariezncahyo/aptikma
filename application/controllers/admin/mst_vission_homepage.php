<?php

class Mst_vission_homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_homepage");
	}

	function index(){
		$data["vission_homepage"] = $this->model_homepage->get_vission_homepage()->result();
		$this->load->view("admin/mst_vission_homepage", $data);
	}

	function insert_vission_homepage(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_vission = $this->input->post("id_vission_homepage");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$image = $this->input->post("image");
			$this->model_homepage->insert_vission_homepage($id_vission, $desc_en, $desc_id, $image);

			if($id_vission == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "vission_homepage"=>$this->model_homepage->get_vission_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_vission_homepage(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_vission = $this->input->post("id_vission_homepage");
			$this->model_homepage->delete_vission_homepage($id_vission);

			if($id_vission == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "vission_homepage"=>$this->model_homepage->get_vission_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>