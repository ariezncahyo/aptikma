<?php

 class Mst_important_career extends CI_Controller
 {
 	function __construct(){
 		parent::__construct();
 		$this->load->model("admin/model_career");
 	}

 	function index(){
 		$data["important_career"] = $this->model_career->get_important_career()->result();
 		$this->load->view("admin/mst_important_career", $data);
 	}

 	function insert_important_career(){
 		header("Content-type : application/json");
 		$status = "";
 		try{
 			$this->load->helper("form");
 			$id_important_career = $this->input->post("id_important_career");
 			$name_en = $this->input->post("name_en");
 			$name_id = $this->input->post("name_id");
 			$this->model_career->insert_important_career($id_important_career, $name_en, $name_id);
 			if($id_important_career = ""){
 				$status = "Insert Data Successful";
 			}else{
 				$status = "Update Data Successful";
 			}
 		$data = array("status"=>$status, "important_career"=>$this->model_career->get_important_career()->result());
 		echo json_encode($data);

 		}catch (Exception $ex){
 			$status = "Failed->".$ex;
 			$data = array("status"=>$status);
 			echo json_encode($data);
 		}
 	}

 	function delete_important_career(){
 		header("Content-type : application/json");
 		$status = "";
 		try{
 			$this->load->helper("form");
 			$id_important_career = $this->input->post("id_important_career");
 			$this->model_career->delete_important_career($id_important_career);
 			if($id_important_career = ""){
 				$status = "Failed Data Error";
 			}else{
 				$status = "Delete Data Successful";
 			}
 			$data = array("status"=>$status, "important_career"=>$this->model_career->get_important_career()->result());
 			echo json_encode($data);
 		}catch(Exception $ex){
 			$status = "Failed->".$ex;
 			$data = array("status"=>$status);
 			echo json_encode($data);
 		}
 	}
 }

 ?>