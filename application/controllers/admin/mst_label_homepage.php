<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_label_homepage extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('admin/model_homepage');
                $this->load->helper('form');
        }


        public function index(){
                $data["label_homepage"] = $this->model_homepage->get_label_homepage()->result();
                $this->load->view('admin/mst_label_homepage',$data);
        }
        public function insert_label(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_label = $this->input->post('id_label_homepage');
                        $position=$this->input->post('position');
                        $label_en=$this->input->post('label_en');
                        $label_id=$this->input->post('label_id');

                        $this->model_homepage->insert_label_homepage($id_label, $position,$label_en,$label_id);
                        if($id_label == ""){
                                $status = "Insert Data Successfull";
                        }else{
                                $status = "Update Data Successfull";
                        }
                        $data = array('status'=>$status,'label_homepage'=>$this->model_homepage->get_label_homepage()->result());
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
                        $id_label_homepage=$this->input->post('id_label_homepage');

                        $this->model_homepage->delete_label_homepage($id_label_homepage);
                        if($id_label_homepage == ""){
                                $status = "Failed Data Error";
                        }else{
                                $status = "Delete Data Successful";
                        }
                        $data = array('status'=>$status,'label_homepage'=>$this->model_homepage->get_label_homepage()->result());
                        echo json_encode($data);
                }catch(Exception $exc) {
                        $status = "Failed->".$exc;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

}
?>