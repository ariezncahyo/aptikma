<?php

 class Mst_requirement_career extends CI_Controller
 {
 	function __construct(){
 		parent::__construct();
 		$this->load->model("admin/model_career");
 	}

 	function index(){
 		$data["requirement_career"] = $this->model_career->get_requirements_career()->result();
 		$this->load->view("admin/mst_requirement_career", $data);
 	}

 	function insert_requirement_career(){
 		header("Content-type : application/json");
 		$status = "";
 		try{
 			$this->load->helper("form");
 			$id_requirement_career = $this->input->post("id_requirement_career");
 			$name_en = $this->input->post("name_en");
 			$name_id = $this->input->post("name_id");
 			$this->model_career->insert_requirement_career($id_requirement_career, $name_en, $name_id);
 			if($id_requirement_career == ""){
 				$status = "Insert Data Sucessfull";
 			}else{
 				$status = "Update Data Successfull";
 			}
 		$data = array("status"=>$status, "requirement_career"=>$this->model_career->get_requirements_career()->result());
 		echo json_encode($data);

 		}catch (Exception $ex){
 			$status = "Failed->".$ex;
 			$data = array("status"=>$status);
 			echo json_encode($data);
 		}
 	}

 	function delete_requirement_career(){
 		header("Content-type : application/json");
 		$status = "";
 		try{
 			$this->load->helper("form");
 			$id_requirement_career = $this->input->post("id_requirement_career");
 			$this->model_career->delete_requirements_career($id_requirement_career);
 			if($id_requirement_career = ""){
 				$status = "Failed Data Error";
 			}else{
 				$status = "Delete Data Sucessfull";
 			}
 			$data = array("status"=>$status, "requirement_career"=>$this->model_career->get_requirements_career()->result());
 			echo json_encode($data);
 		}catch(Exception $ex){
 			$status = "Failed->".$ex;
 			$data = array("status"=>$status);
 			echo json_encode($data);
 		}
 	}
 }

 ?>