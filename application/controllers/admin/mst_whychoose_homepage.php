<?php

class Mst_whychoose_homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_homepage");
	}

	function index(){
		$data["whychoose_homepage"] = $this->model_homepage->get_whychoose_homepage()->result();
		$this->load->view("admin/mst_whychoose_homepage", $data);
	}

	function insert_whychoose_homepage(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_whychoose = $this->input->post("id_whychoose_homepage");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");			
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$image = $this->input->post("image");
			$this->model_homepage->insert_whychoose_homepage($id_whychoose, $title_en, $title_id, $desc_en, $desc_id, $image);

			if($id_whychoose == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "whychoose_homepage"=>$this->model_homepage->get_whychoose_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_whychoose_homepage(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_whychoose = $this->input->post("id_whychoose_homepage");
			$this->model_homepage->delete_whychoose_homepage($id_whychoose);

			if($id_whychoose == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "whychoose_homepage"=>$this->model_homepage->get_whychoose_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>