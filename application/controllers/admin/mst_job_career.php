<?php

class Mst_job_career extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_career");
	}

	function index(){
		$data["job_career"] = $this->model_career->get_job_career()->result();
		$this->load->view("admin/mst_job_career", $data);
	}

	function insert_job(){
		header("Content-type : application/json");
 		$status = "";
		try{
			$this->load->helper('form');
			$id_job = $this->input->post("id_job_career");
			$name_en = $this->input->post("name_en");
			$name_id = $this->input->post("name_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$this->model_career->insert_job_career($id_job, $name_en, $name_id, $desc_en, $desc_id);

			if($id_job == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "job_career"=>$this->model_career->get_job_career()->result());
			echo json_encode($data);
		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_job(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_job = $this->input->post("id_job_career");
			$this->model_career->delete_job_career($id_job);

			if($id_job == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "job_career"=>$this->model_career->get_job_career()->result());
			echo json_encode($data);
		}catch (Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>