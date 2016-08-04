<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_portfolio extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("admin/model_portfolio");
	}

	public function index(){
		$data["portfolio"] = $this->model_portfolio->get_portfolio()->result();
		$data["category_portfolio"] = $this->model_portfolio->get_category_portfolio()->result();
		$this->load->view("admin/mst_portfolio", $data);
	}

	function insert_portfolio(){
		header("Content_type: application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_portfolio = $this->input->post("id_portfolio");
			$title_en = $this->input->post("title_en");
			$title_id = $this->input->post("title_id");
			$desc_en = $this->input->post("desc_en");
			$desc_id = $this->input->post("desc_id");
			$url_link = $this->input->post("url_link");
			$category = $this->input->post("category");

			$this->model_portfolio->insert_portfolio($id_portfolio, $title_en, $title_id, $desc_en, $desc_id, $url_link, $category);

			if($id_portfolio = ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "portfolio"=>$this->model_portfolio->get_portfolio()->result());
			
			echo json_encode($data);

		} catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}

	}

	function delete_portfolio(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_portfolio = $this->input->post("id_portfolio");

			$this->model_portfolio->delete_portfolio($id_portfolio);

			if($id_portfolio = ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "portfolio"=>$this->model_portfolio->get_portfolio()->result());
			
			echo json_encode($data);
		}catch (Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

}