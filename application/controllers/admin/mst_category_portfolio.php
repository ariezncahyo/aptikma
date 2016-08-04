<?php 

class Mst_category_portfolio extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("admin/model_portfolio");
	}
	
	function index(){
		$data["category"] = $this->model_portfolio->get_category_portfolio()->result();
		$this->load->view('admin/mst_category_portfolio', $data);
	}

	public function insert_category(){
		header("Content-type: application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_category = $this->input->post("id_category");
			$name_en = $this->input->post("name_en");
			$name_id = $this->input->post("name_id");
			$this->model_portfolio->insert_category_portfolio($id_category, $name_en, $name_id);

			if($id_category = ""){
				$status = "Insert Data Category Successful";
			}else{
				$status = "Update Data Category Successful";
			}

			$data = array("status"=>$status, "category"=>$this->model_portfolio->get_category_portfolio()->result());
			echo json_encode($data);
		} catch(Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

	public function delete_category(){
		header("Content-type : application/json");
		$status = "";
		try{
			$this->load->helper('form');
			$id_category = $this->input->post("id");
			$this->model_portfolio->delete_category_portfolio($id_category);

			if($id_category = ""){
				$status = "Failed Data Error";
			}else{
				$status = "Delete Data Category Sucessfull";
			}

			$data = array("status"=>$status, "category"=>$this->model_portfolio->get_category_portfolio()->result());
			echo json_encode($data);
		} catch (Exception $ex){
			$status = "Failed->".$ex;
			$data = array("status"=>$status);
			echo json_encode($data);
		}
	}

}

?>