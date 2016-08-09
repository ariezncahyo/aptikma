<?php

class Mst_ourskill_aboutus extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_aboutus");
	}

	function index(){
		$data["ourskill_aboutus"] = $this->model_aboutus->get_ourskill_aboutus()->result();
		$this->load->view("admin/mst_ourskill_aboutus", $data);
	}

	function insert_ourskill_aboutus(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_ourskill = $this->input->post("id_ourskill_aboutus");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$this->model_aboutus->insert_ourskill_aboutus($id_ourskill, $title_en, $title_id, $desc_en, $desc_id);

			if($id_ourskill == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "ourskill_aboutus"=>$this->model_aboutus->get_ourskill_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_ourskill_aboutus(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_ourskill = $this->input->post("id_ourskill_aboutus");
			$this->model_aboutus->delete_ourskill_aboutus($id_ourskill);

			if($id_ourskill == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "ourskill_aboutus"=>$this->model_aboutus->get_ourskill_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>