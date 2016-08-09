<?php 

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library("session");
		$this->load->model("admin/model_user");
	}

	public function index(){
		$this->load->view("admin/login");
	}

	public function proses_login(){
		header("Content-type : application/json");
		$temp = "";
		try{
			$this->load->helper('form');
			$username = $this->input->post("username");
			$password = $this->input->post("password");
		
			$get_user = $this->model_user->login($username);

			if($get_user->num_rows() > 0){
				foreach($get_user->result() as $row){

					//Jika Benar
					if($password == $row->password){
						$temp = "Login berhasil, silahkan tunggu....";

						$this->session->set_userdata('id_user', $row->id_user);
						$this->session->set_userdata('fullname', $row->fullname);
						$this->session->set_userdata('username', $row->username);
						$this->session->set_userdata('password', $row->password);
						$this->session->set_userdata('email', $row->email);
						$this->session->set_userdata('description', $row->description);
						$this->session->set_userdata('photo', $row->photo);
					}
					// Jika Salah maka
					else {
						$temp = "Password Salah";
					}
				}
			}
			//Jika Username Salah
			else{
				$temp = "Username Belum Terdaftar !!";
			}

			$data = array("status"=> $temp);
			echo json_encode($data);
		} catch (Exceptiona $ex){
			$temp = "Login Gagal";
			$data = array("status"=>$temp);
			echo json_encode($data);
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}
}

?>