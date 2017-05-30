<?php
class MyController extends CI_Controller {
	public function __construct() {
	parent::__construct();
	        if(!$this->session->userdata('username'))
			redirect('Login_controller');

	$this->load->model('Buzz_Model');
	}
	function index() {
	//	$data['buzz'] = $this->Buzz_Model->getData(); //panggil Buzz_Model lalu jalankan function getData
	//	$this->load->view('buzz', $data);
		//$this->load->view('home');
	}

	function create() {

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$is_submit = $this->input->post('is_submit');

		if(isset($is_submit) && $is_submit == 1){
		$fileUpload = array();
		$isUpload = FALSE;

		$config = array(
		'upload_path' => './assets/images/',
		'allowed_types' => 'jpg|jpeg|png',
		'max_size' => 512
		);

		$this->upload->initialize($config);
		if($this->upload->do_upload('userfile')){
		$fileUpload = $this->upload->data();
		$isUpload = TRUE;
		}

		if($isUpload){
		$data = array(
		//	'id_artikel' => $this->input->pos('id_artikel'),
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tanggal' => $this->input->post('tanggal'),
			'gambar' => $fileUpload['file_name']

		);
		$this->Buzz_Model->addData($data);
		redirect('buzz/readData');		

	}

	} else{
		$this->load->view('views/form_add_buzz');
		}
	}

	function tambahArtikel() {
		$this->load->view('views/form_add_buzz');
	}

	function goDashboard() {
		$this->load->view('halaman');
	}

	function readData() {
		$data = $this->Buzz_Model->getData();
		$this->load->view('Buzz', array('data' => $data));
	}

	function do_upload(){
		$type = explode(".", $_FILES['gambar']['name']);
		$type = $type [count($type)-1];
		$url = 'assets/images/sepatu/'.uniqid(rand()).'.'.$type;
		if(in_array($type, array('jpg','jpeg','gif','png','JPG','PNG','JPEG')))
			if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				if(move_uploaded_file($_FILES['gambar']['tmp_name'], $url))
					return $url;
			return "";
	}

	function do_update($id_artikel){
		$url = $this->do_upload();
		$id_artikel = $_POST['id_artikel'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tanggal = $_POST['tanggal'];
		$gambar = $url;
		if(empty($url))
			$gambar = $_POST['gambarlama'];
		
		$data_update = array('id_artikel' => $id_artikel, 
		'judul' => $judul , 'isi' => $isi,'tanggal' => $tanggal,'gambar'=>$gambar );

		$where = array('id_artikel' => $id_artikel );
		$res = $this->Buzz_Model->updateData('buzz',$data_update,$where);

		if($res >= 1){
			redirect('buzz/readData');
		}

	}

		function do_edit($id_artikel){
		$spt = $this->Buzz_Model->getDataBuzz("where id_artikel = '$id_artikel' ", "buzz");
		$data = array('id_artikel' => $spt[0]['id_artikel'], 
			'judul' => $spt[0]['judul'],
			'isi' => $spt[0]['isi'],
			'tanggal' => $spt[0]['tanggal'],
			'gambar' => $spt[0]['gambar']);
		$this->load->view('views/form_edit_buzz', $data);
	}
/*
	public function do_update($id_artikel){
	
		    $this->load->helper('form');
		    $this->load->library('form_validation');
		    $this->load->library('upload');
		    
		    $is_submit = $this->input->post('is_submit');
		    
		    if(isset($is_submit) && $is_submit == 1){
			    $fileUpload = array();
			    $isUpload = FALSE;
			    $config = array(
			    'upload_path' => './assets/images/',
			    'allowed_types' => 'jpg|jpeg|png',
			    'max_size' => 512
		    );
		    
		    $this->upload->initialize($config);

		    if($this->upload->do_upload('userfile')){
			    $fileUpload = $this->upload->data();
			    $isUpload = TRUE;
			}

		    if($isUpload){
		
				$data = array(
					'id_artikel' => $this->input->post('id_artikel'),
				    'judul' => $this->input->post('judul'),
				    'isi' => $this->input->post('isi'),
				    'tanggal' => $this->input->post('tanggal'),
				    'gambar' => $fileUpload['file_name']	
					);
		
		$this->Buzz_Model->UpdateData($id_artikel, $data);	
		redirect('buzz/readData');	
		}
	}else{
	    $data['buzz'] = $this->Buzz_Model->get_buzz_id($id_artikel);
	    $this->load->view('views/form_edit_buzz', $data);
	    }
  	}
*/
	public function deleteData($id_artikel){
    	$this->Buzz_Model->delete_item($id_artikel); //update datanya
	   	redirect('buzz/readData');
    //	$this->load->view('Member');
  }

	
	
}
?>