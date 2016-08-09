<?php

	class Mst_seo_homepage extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model("admin/model_homepage");
			$this->load->helper('form');
		}

		function index(){
			$data["seo_homepage"] = $this->model_homepage->get_seo_homepage()->result();
			$this->load->view("admin/mst_seo_homepage",$data);
		}

		function insert_seo(){
			header("Content-type : applicaton/json");
			$status = "";
			try{
				$id_seo_homepage = $this->input->post("id_seo_homepage");
				$meta_tag_en = $this->input->post("meta_tag_en");
				$meta_tag_id = $this->input->post("meta_tag_id");
				$meta_keyword_en = $this->input->post("meta_keyword_en");
				$meta_keyword_id = $this->input->post("meta_keyword_id");
				$meta_desc_en = $this->input->post("meta_desc_en");
				$meta_desc_id = $this->input->post("meta_desc_id");
				$this->model_homepage->insert_seo_homepage($id_seo_homepage, $meta_tag_en, $meta_tag_id, $meta_keyword_en, $meta_keyword_id, $meta_desc_en, $meta_desc_id);

				if($id_seo_homepage == ""){
					$status = "Insert Data Successful";
				}else{
					$status = "Update Data Successful";
				}

				$data = array("status"=>$status, "seo_homepage"=>$this->model_homepage->get_seo_homepage()->result());
				echo json_encode($data);

			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
			}
		}

		function delete_seo(){
			header("Content-type: application/json");
			$status = "";
			try{
				$id_seo = $this->input->post("id_seo_homepage");
				$this->model_homepage->delete_seo_homepage($id_seo);
				if($id_seo == ""){
					$status = "Failed Data Error";
				}else{
					$status = "Delete Data Successful";
				}
				$data = array("status"=>$status, "seo_homepage"=>$this->model_homepage->get_seo_homepage()->result());
				echo json_encode($data);
			}catch(Exception $ex){
				$status ="Failed->".$ex;
				$data = array("status"=>$status);
				echo json_encode($data);
		}
	}
}

?>