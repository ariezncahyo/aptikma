<?php

class Mst_ourgoal_aboutus extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_aboutus");
	}

	function index(){
		$data["ourgoal_aboutus"] = $this->model_aboutus->get_ourgoal_aboutus()->result();
		$this->load->view("admin/mst_ourgoal_aboutus", $data);
	}

	function insert_ourgoal_aboutus(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_ourgoal = $this->input->post("id_ourgoal_aboutus");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$icon = $this->input->post("icon");
			$this->model_aboutus->insert_ourgoal_aboutus($id_ourgoal, $title_en, $title_id, $desc_en, $desc_id, $icon);

			if($id_ourgoal == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "ourgoal_aboutus"=>$this->model_aboutus->get_ourgoal_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_ourgoal_aboutus(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_ourgoal = $this->input->post("id_ourgoal_aboutus");
			$this->model_aboutus->delete_ourgoal_aboutus($id_ourgoal);

			if($id_ourgoal == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "ourgoal_aboutus"=>$this->model_aboutus->get_ourgoal_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>