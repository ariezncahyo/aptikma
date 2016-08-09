<?php

class Mst_banner_aboutus extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_aboutus");
	}

	function index(){
		$data["banner_aboutus"] = $this->model_aboutus->get_banner_aboutus()->result();
		$this->load->view("admin/mst_banner_aboutus", $data);
	}

	function insert_banner_aboutus(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_banner = $this->input->post("id_banner_aboutus");
			$image = $this->input->post("image");
			$this->model_aboutus->insert_banner_aboutus($id_banner, $image);

			if($id_banner == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "banner_aboutus"=>$this->model_aboutus->get_banner_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_banner_aboutus(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_banner = $this->input->post("id_banner_aboutus");
			$this->model_aboutus->delete_banner_aboutus($id_banner);

			if($id_banner == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "banner_aboutus"=>$this->model_aboutus->get_banner_aboutus()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>