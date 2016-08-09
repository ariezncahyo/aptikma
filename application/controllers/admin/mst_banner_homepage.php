<?php

class Mst_banner_homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_homepage");
	}

	function index(){
		$data["banner_homepage"] = $this->model_homepage->get_banner_homepage()->result();
		$this->load->view("admin/mst_banner_homepage", $data);
	}

	function insert_banner_homepage(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_banner = $this->input->post("id_banner_homepage");
			$name_en = $this->input->post("name_en");
			$name_id = $this->input->post("name_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$image = $this->input->post("image");
			$url_link = $this->input->post("url_link");
			$status_homepage = $this->input->post("status");
			$this->model_homepage->insert_banner_homepage($id_banner, $name_en, $name_id, $desc_en, $desc_id, $image, $url_link, $status_homepage);

			if($id_banner == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "banner_homepage"=>$this->model_homepage->get_banner_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_banner_homepage(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_banner = $this->input->post("id_banner_homepage");
			$this->model_homepage->delete_banner_homepage($id_banner);

			if($id_banner == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "banner_homepage"=>$this->model_homepage->get_banner_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>