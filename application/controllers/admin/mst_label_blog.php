<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_label_blog extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('admin/model_blog');
                $this->load->helper('form');
        }


        public function index(){
                $data["label_blog"] = $this->model_blog->get_label_blog()->result();
                $this->load->view('admin/mst_label_blog',$data);
        }
        public function insert_label(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_label = $this->input->post('id_label_blog');
                        $position=$this->input->post('position');
                        $label_en=$this->input->post('label_en');
                        $label_id=$this->input->post('label_id');

                        $this->model_blog->insert_label_blog($id_label, $position,$label_en,$label_id);
                        if($id_label == ""){
                                $status = "Insert Data Successfull";
                        }else{
                                $status = "Update Data Successfull";
                        }
                        $data = array('status'=>$status,'label_blog'=>$this->model_blog->get_label_blog()->result());
                        echo json_encode($data);
                }catch(Exception $ex) {
                        $status = "Failed->".$ex;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

        public function delete_label(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_label_blog=$this->input->post('id_label_blog');

                        $this->model_blog->delete_label_blog($id_label_blog);
                        if($id_label_blog == ""){
                                $status = "Failed Data Error";
                        }else{
                                $status = "Delete Data Successful";
                        }
                        $data = array('status'=>$status,'label_blog'=>$this->model_blog->get_label_blog()->result());
                        echo json_encode($data);
                }catch(Exception $exc) {
                        $status = "Failed->".$exc;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

}
?>