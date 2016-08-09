<?php

	class Mst_list_intern extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_intern");
			$this->load->helper('form');
		}

		function index(){
			$data["list_intern"] = $this->model_intern->get_list_intern()->result();
			$this->load->view("admin/mst_list_intern",$data);
		}

		function insert_list(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_list = $this->input->post("id_list_intern");
				$name = $this->input->post("name");
				$instance = $this->input->post("instance");
				$department = $this->input->post("department");
				$start_date = $this->input->post("start_date");
				$finish_date = $this->input->post("finish_date");
				$this->model_intern->insert_list_intern($id_list, $name, $instance, $department, $start_date, $finish_date);

				if($id_list == ""){
					$status = "Insert Data Successful";
				}else{
					$status = "Update Data Successful";
				}

				$data = array("status"=>$status, "list_intern"=>$this->model_intern->get_list_intern()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_list(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_list = $this->input->post("id_list_intern");
				$this->model_intern->delete_list_intern($id_list);
				if($id_list == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "list_intern"=>$this->model_intern->get_list_intern()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>