<?php 

class mst_label_portfolio extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_portfolio");
	}

	function index(){
		$data["label_portfolio"] = $this->model_portfolio->get_label_portfolio()->result();
		$this->load->view('admin/mst_label_portfolio', $data);
	}

	function insert_label_portfolio(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_portfolio = $this->input->post("id_label_portfolio");
			$label_en = $this->input->post("label_en");
			$label_id = $this->input->post("label_id");
			$position = $this->input->post("position");

			$this->model_portfolio->insert_label_portfolio($id_label_portfolio, $label_en, $label_id, $position);

			if($id_label_portfolio == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "label_portfolio"=>$this->model_portfolio->get_label_portfolio()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failded->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_label_portfolio(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_portfolio = $this->input->post("id_label_portfolio");
			$this->model_portfolio->delete_label_portfolio($id_label_portfolio);
			if($id_label_portfolio = ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "label_portfolio"=>$this->model_portfolio->get_label_portfolio()->result());
			echo json_encode($data);
		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

}