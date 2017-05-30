<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->model('Admin_model');
	}

	function index(){
		$this->load->view('signin');
	}
	function masuk(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		$cek = $this->Admin_model->cek($username,sha1($password));

		if($cek ->num_rows() ==1){

			foreach ($cek -> result() as $data) {
				$sess_data['id_admin'] = $data->id_admin;
				$sess_data['username'] = $data->username;
				$this->session->set_userdata($sess_data);
			}

			redirect('halaman');
		}
		else{

			$this->session->set_flashdata('pesan', 'user / pass ilegal !');
			redirect('login');

		}
	}

	function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
}
?>