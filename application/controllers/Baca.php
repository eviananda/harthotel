<?php
class Baca extends ci_controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_baca');
        $this->load->helper('text'); // memanggil helper text
    }

    function index()
    {
    $data['data']=$this->Model_baca->tampil();
    $this->load->view('Bacaku',$data);
    }

    function selanjutnya()
    {
        $id=$this->uri->segment(3);
        $data['data']=$this->Model_baca->per_id($id);
        $this->load->view('then',$data);
    }
    }