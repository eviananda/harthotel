<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbor extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->model('Model_baca');
        $this->load->helper('text'); // memanggil helper text
    }

	// Index login
	public function index() {
// Proteksi halaman
		$data['data']=$this->Model_baca->tampil();
		$this->simple_login->cek_login();
		$this->load->view('setelah_login',$data);
	}
	
}