<?php

class Mst_menu_homepage extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_homepage");
	}

	function index(){
		$data["menu_homepage"] = $this->model_homepage->get_menu_homepage()->result();
		$this->load->view("admin/mst_menu_homepage", $data);
	}

	function insert_menu_homepage(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_menu = $this->input->post("id_menu_homepage");
			$title = $this->input->post("title");
			$name_en = $this->input->post("name_en");
			$name_id = $this->input->post("name_id");
			$controller = $this->input->post("controller");			
			$url_link_en = $this->input->post("url_link_en");
			$url_link_id = $this->input->post("url_link_id");
			$this->model_homepage->insert_menu_homepage($id_menu, $title, $name_en, $name_id, $controller, $url_link_en, $url_link_id);

			if($id_menu == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "menu_homepage"=>$this->model_homepage->get_menu_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_menu_homepage(){
		header("Content-type : application/json");
		$status ="";
		try{

			$this->load->helper("form");
			$id_menu = $this->input->post("id_menu_homepage");
			$this->model_homepage->delete_menu_homepage($id_menu);

			if($id_menu == ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "menu_homepage"=>$this->model_homepage->get_menu_homepage()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}
}

?>