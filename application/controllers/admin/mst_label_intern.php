<?php 

class mst_label_intern extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_intern");
	}

	function index(){
		$data["label_intern"] = $this->model_intern->get_label_intern()->result();
		$this->load->view('admin/mst_label_intern', $data);
	}

	function insert_label_intern(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_intern = $this->input->post("id_label_intern");
			$label_en = $this->input->post("label_en");
			$label_id = $this->input->post("label_id");
			$position = $this->input->post("position");

			$this->model_intern->insert_label_intern($id_label_intern, $label_en, $label_id, $position);

			if($id_label_intern == ""){
				$status = "Insert Data Successful";
			}else{
				$status = "Update Data Successful";
			}

			$data = array("status"=>$status, "label_intern"=>$this->model_intern->get_label_intern()->result());
			echo json_encode($data);

		}catch(Exception $ex){
			$status = "Failded->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	function delete_label_intern(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper("form");
			$id_label_intern = $this->input->post("id_label_intern");
			$this->model_intern->delete_label_intern($id_label_intern);
			if($id_label_intern = ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Successful";
			}

			$data = array("status"=>$status, "label_intern"=>$this->model_intern->get_label_intern()->result());
			echo json_encode($data);
		}catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

}