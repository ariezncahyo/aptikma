<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mst_label_aboutus extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('admin/model_aboutus');
                $this->load->helper('form');
        }


        public function index(){
                $data["label_aboutus"] = $this->model_aboutus->get_label_aboutus()->result();
                $this->load->view('admin/mst_label_aboutus',$data);
        }
        public function insert_label(){
                header("Content-type: application/json");
                $status = "";
                try{
                        $id_label = $this->input->post('id_label_aboutus');
                        $position=$this->input->post('position');
                        $label_en=$this->input->post('label_en');
                        $label_id=$this->input->post('label_id');

                        $this->model_aboutus->insert_label_aboutus($id_label, $position,$label_en,$label_id);
                        if($id_label == ""){
                                $status = "Insert Data Successful";
                        }else{
                                $status = "Update Data Successful";
                        }
                        $data = array('status'=>$status,'label_aboutus'=>$this->model_aboutus->get_label_aboutus()->result());
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
                        $id_label_aboutus=$this->input->post('id_label_aboutus');

                        $this->model_aboutus->delete_label_aboutus($id_label_aboutus);
                        if($id_label_aboutus == ""){
                                $status = "Failed Data Error";
                        }else{
                                $status = "Delete Data Successful";
                        }
                        $data = array('status'=>$status,'label_aboutus'=>$this->model_aboutus->get_label_aboutus()->result());
                        echo json_encode($data);
                }catch(Exception $exc) {
                        $status = "Failed->".$exc;
                        $data = array('status'=>$status);
                        echo json_encode($data);

                }

        }

}
?>