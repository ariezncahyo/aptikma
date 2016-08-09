<?php

class Mst_banner extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_banner");
	}

	function index(){
		$data["banner"] = $this->model_banner->get_banner()->result();
		$this->load->view("admin/mst_banner", $data);
	}

	function insert_banner(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_banner = $this->input->post("id_banner");
			$title = $this->input->post("title");
			$image = $this->input->post("image");
			$this->model_banner->insert_banner($id_banner, $title, $image);

			if($id_banner == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "banner"=>$this->model_banner->get_banner()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_banner(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_banner = $this->input->post("id_banner");
			$this->model_banner->delete_banner($id_banner);

			if($id_banner == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "banner"=>$this->model_banner->get_banner()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>