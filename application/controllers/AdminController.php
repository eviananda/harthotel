<?php
class AdminController extends CI_Controller {
	public function __construct() {
	parent::__construct();
		        if(!$this->session->userdata('username'))
				redirect('Login_controller');


	$this->load->model('Admin_model');
	}

	function index() {
	$this->load->view('home');
	}

	function create() {
		$data = array(
			'id_admin' => $this->input->post('id_admin'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			//'ga'

		);
		$this->Admin_model->addData($data);
		//$this->index();
		redirect('admin_view');
		
	}

	function readData() {
		$data = $this->Admin_model->getData();
		$this->load->view('Admin_view', array('data' => $data));
	}


// 	public function delete($id_member){
//	    $this->Member_Model->delete_member($id_member); //update datanya
//	    redirect('member');	}

	public function edit_data($id_admin) {

		$barang = $this->Admin_model->getAdmin("where id_admin = '$id_admin'");
		$data = array(
			"id_admin" => $barang[0]['id_admin'],
			"nama" => $barang[0]['nama'],
			"username" => $barang[0]['username'],
			"password" => $barang[0]['password']
		);
		$this->load->view('views/form_edit_admin' , $data);
	}
	

	public function do_update(){

		$id_admin = $_POST['id_admin'];
		$nama = $_POST['nama'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = array(
			//'kode_barang' => $kode_barang,
			'nama' => $nama,
			'username' => $username,
			'password' => $password
			);
		$where = array('id_admin' => $id_admin );
		$res = $this->Admin_model->UpdateData('admin' , $data , $where );
	//	if($res>=1) {
			redirect('admin_r');
	
	}
	

}
?>