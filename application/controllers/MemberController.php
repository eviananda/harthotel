<?php
class MemberController extends CI_Controller {
	public function __construct() {
	parent::__construct();
        if(!$this->session->userdata('username'))
		redirect('Login_controller');

	$this->load->model('Member_Model');



	    $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
	}

	function index() {
//	$this->load->view('home');
	}

	function create() {
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'zipcode' => $this->input->post('zipcode'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
			//'ga'

		);
		$this->Member_Model->addData($data);
		//$this->index();
		redirect('member');
		
	}

	function tambahMember() {
		$this->load->view('views/form_add_member');
	}


	function readData() {
/*
		$config['base_url']=base_url()."MemberController/readData";
            $config['total_rows']= $this->db->query("SELECT * FROM member;")->num_rows();
            $config['per_page']=11;
        	$config['num_links'] = 2;
            $config['uri_segment']=3;

             //Tambahan untuk styling
	        $config['full_tag_open'] = "<ul class='pagination'>";
	        $config['full_tag_close'] ="</ul>";
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
	        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	        $config['next_tag_open'] = "<li>";
	        $config['next_tagl_close'] = "</li>";
	        $config['prev_tag_open'] = "<li>";
	        $config['prev_tagl_close'] = "</li>";
	        $config['first_tag_open'] = "<li>";
	        $config['first_tagl_close'] = "</li>";
	        $config['last_tag_open'] = "<li>";
	        $config['last_tagl_close'] = "</li>";
 
            $config['first_link']='< Pertama ';
        	$config['last_link']='Terakhir > ';
        	$config['next_link']='> ';
        	$config['prev_link']='< ';
            $this->pagination->initialize($config);
 
        // konfigurasi model dan view untuk menampilkan data
	        $this->load->model('Member_Model');
        	$data['data']=$this->Member_Model->getAll($config , 'member');
       		$this->load->view('member', $data);
*/
		$data = $this->Member_Model->getData();
		$this->load->view('Member', array('data' => $data));
	}


 	public function delete($id_member){
	    $this->Member_Model->delete_member($id_member); //update datanya
	    redirect('member');
	}

	public function edit_data($id_member) {

		$barang = $this->Member_Model->getMember("where id_member = '$id_member'");
		$data = array(
			"id_member" => $barang[0]['id_member'],
			"first_name" => $barang[0]['first_name'],
			"last_name" => $barang[0]['last_name'],
			"address" => $barang[0]['address'],
			"city" => $barang[0]['city'],
			"country" => $barang[0]['country'],
			"zipcode" => $barang[0]['zipcode'],
			"email" => $barang[0]['email'],
			"username" => $barang[0]['username'],
			"password" => $barang[0]['password']
		);
		$this->load->view('views/form_edit_member' , $data);
	}
	

	public function do_update(){

		$id_member = $_POST['id_member'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$address = $_POST['address'];
		$city= $_POST['city'];
		$country= $_POST['country'];
		$zipcode = $_POST['zipcode'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = array(
			//'kode_barang' => $kode_barang,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'address' => $address,
			'city' => $city,
			'country' => $country,
			'zipcode' => $zipcode,
			'email' => $email,
			'username' => $username,
			'password' => $password
			);
		$where = array('id_member' => $id_member );
		$res = $this->Member_Model->UpdateData('member' , $data , $where );
	//	if($res>=1) {
			redirect('member');
	
	}
	

}
?>