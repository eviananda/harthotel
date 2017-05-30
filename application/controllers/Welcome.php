<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Model_baca');
        $this->load->helper('text'); // memanggil helper text
    }

    //controller homepage tampilan awal
	public function index()//ini tadi login
	{
		$data['data']=$this->Model_baca->tampil();
		$this->load->view('homepage',$data);//ini tadi signin
	}

	function selanjutnya()
    {
        $id=$this->uri->segment(3);
        $data['data']=$this->Model_baca->per_id($id);
        $this->load->view('Selanjutnya',$data);
    }

	public function login()
{
	{
		$this->load->view('signin');//ini tadi signin
	}
}
}
