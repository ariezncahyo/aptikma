<?php

	class Mst_message extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_message");
			$this->load->helper('form');
		}

		function index(){
			$data["message"] = $this->model_message->get_message()->result();
			$this->load->view("admin/mst_message",$data);
		}

		function delete_message(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_list = $this->input->post("id_message");
				$this->model_message->delete_message($id_list);
				if($id_list == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "message"=>$this->model_message->get_message()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>