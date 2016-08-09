<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_tag_blog extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('admin/model_blog');
                $this->load->helper('form');
        }


        public function index(){
                $data["tag_blog"] = $this->model_blog->get_tag_blog()->result();
                $this->load->view('admin/mst_tag_blog',$data);
        }
        public function insert_tag(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_tag = $this->input->post('id_tag_blog');
                        $name=$this->input->post('name');

                        $this->model_blog->insert_tag_blog($id_tag, $name);
                        if($id_tag == ""){
                                $status = "Insert Data Successful";
                        }else{
                                $status = "Update Data Successful";
                        }
                        $data = array('status'=>$status,'tag_blog'=>$this->model_blog->get_tag_blog()->result());
                        echo json_encode($data);
                }catch(Exception $ex) {
                        $status = "Failed->".$ex;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

        public function delete_tag(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_tag_blog=$this->input->post('id_tag_blog');

                        $this->model_blog->delete_tag_blog($id_tag_blog);
                        if($id_tag_blog == ""){
                                $status = "Failed Data Error";
                        }else{
                                $status = "Delete Data Successful";
                        }
                        $data = array('status'=>$status,'tag_blog'=>$this->model_blog->get_tag_blog()->result());
                        echo json_encode($data);
                }catch(Exception $exc) {
                        $status = "Failed->".$exc;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

}
?>