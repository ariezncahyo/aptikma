<?php 

class Mst_label_career extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_career");
	}

	function index(){
		$data["label_career"] = $this->model_career->get_label_career()->result();
		$this->load->view('admin/mst_label_career', $data);
	}

	function insert_label_career(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_career = $this->input->post("id_label_career");
			$label_en = $this->input->post("label_en");
			$label_id = $this->input->post("label_id");
			$position = $this->input->post("position");

			$this->model_career->insert_label_career($id_label_career, $label_en, $label_id, $position);

			if($id_label_career == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "label_career"=>$this->model_career->get_label_career()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failded->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_label_career(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_career = $this->input->post("id_label_career");
			$this->model_career->delete_label_career($id_label_career);
			if($id_label_career = ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "label_career"=>$this->model_career->get_label_career()->result());
			echo json_encode($data);
		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

}