<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_category_blog extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('admin/model_blog');
                $this->load->helper('form');
        }


        public function index(){
                $data["category_blog"] = $this->model_blog->get_category_blog()->result();
                $this->load->view('admin/mst_category_blog',$data);
        }
        public function insert_category(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_category = $this->input->post('id_category_blog');
                        $name_en=$this->input->post('name_en');
                        $name_id=$this->input->post('name_id');

                        $this->model_blog->insert_category_blog($id_category, $name_en, $name_id);
                        if($id_category == ""){
                                $status = "Insert Data Successfull";
                        }else{
                                $status = "Update Data Successfull";
                        }
                        $data = array('status'=>$status,'category_blog'=>$this->model_blog->get_category_blog()->result());
                        echo json_encode($data);
                }catch(Exception $ex) {
                        $status = "Failed->".$ex;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

        public function delete_category(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_category_blog=$this->input->post('id_category_blog');

                        $this->model_blog->delete_category_blog($id_category_blog);
                        if($id_category_blog == ""){
                                $status = "Failed Data Error";
                        }else{
                                $status = "Delete Data Successful";
                        }
                        $data = array('status'=>$status,'category_blog'=>$this->model_blog->get_category_blog()->result());
                        echo json_encode($data);
                }catch(Exception $exc) {
                        $status = "Failed->".$exc;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

}
?>