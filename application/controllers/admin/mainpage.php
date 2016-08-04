<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainpage extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->session->userdata("id_user") != null){
			$this->load->view("admin/mainpage");
		} else {
			redirect("admin/login");
		}
	}

}

?>