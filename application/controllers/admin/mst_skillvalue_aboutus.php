<?php

	class Mst_skillvalue_aboutus extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_aboutus");
			$this->load->helper('form');
		}

		function index(){
			$data["skillvalue_aboutus"] = $this->model_aboutus->get_skillvalue_aboutus()->result();
			$this->load->view("admin/mst_skillvalue_aboutus",$data);
		}

		function insert_skillvalue(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_skillvalue = $this->input->post("id_skillvalue_aboutus");
				$title_en = $this->input->post("title_en");
				$title_id = $this->input->post("title_id");
				$value = $this->input->post("value");
				$this->model_aboutus->insert_skillvalue_aboutus($id_skillvalue, $title_en, $title_id, $value);

				if($id_skillvalue == ""){
					$status = "Insert Data Successful";
				}else{
					$status = "Update Data Successful";
				}

				$data = array("status"=>$status, "skillvalue_aboutus"=>$this->model_aboutus->get_skillvalue_aboutus()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_skillvalue(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_skillvalue = $this->input->post("id_skillvalue_aboutus");
				$this->model_aboutus->delete_skillvalue_aboutus($id_skillvalue);
				if($id_skillvalue == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "skillvalue_aboutus"=>$this->model_aboutus->get_skillvalue_aboutus()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>