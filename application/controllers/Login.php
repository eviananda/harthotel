<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
            function __construct(){
        parent::__construct();
        $this->load->model('Model_baca');
        $this->load->helper('text'); // memanggil helper text
        
    }
    // Index login
    public function index() {
        // Fungsi Login
        $valid = $this->form_validation;
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $valid->set_rules('username','Username','required');
        $valid->set_rules('password','Password','required');
        if($valid->run()) {
            $this->simple_login->login($username,sha1($password), base_url('Welcome'), base_url('Login'));
        }
        // End fungsi login
        $data = array(  'title' => 'Halaman Login Administrator');
        $this->load->view('homepage',$data);
    }
    
    // Logout di sini
    public function logout() {
        $this->simple_login->logout();  
    }   
public function updateprop(){
        $id=$this->uri->segment(3);
        //$data['data']=$this->Model_baca->updateprupil($id);
        $spt = $this->Model_baca->updateprupil($id);
        $data = array('id_member' => $spt[0]['id_member'], 
            'first_name' => $spt[0]['first_name'],
            'last_name' => $spt[0]['last_name'],
            'address' => $spt[0]['address'],
            'email' => $spt[0]['email'],
            'city' => $spt[0]['city'],
            'country' => $spt[0]['country'],
            'zipcode' => $spt[0]['zipcode'],
            'username' => $spt[0]['username'],
            'password' => $spt[0]['password']);
        //$this->load->view('views/form_edit_buzz', $data);
        $this->load->view('profil',$data);
    }


    public function do_updateprop($id_member){
        $this->load->helper(array('form', 'url'));
        //$id_member=$this->uri->segment(3);
        $id_member = $id_member;
        

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $country=$_POST['country'];
        $zipcode=$_POST['zipcode'];
        $email = $_POST['email'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $data_update = array('id_member' => $id_member, 
        'first_name' => $first_name , 'last_name' => $last_name,'address' => $address,'city'=>$city,'country'=>$country,'zipcode'=>$zipcode,'email'=>$email,'username'=>$username,'password'=>$password );

        $where = array('id_member' => $id_member );
        $res = $this->Model_baca->updateDataPro('member',$data_update,$where);

        if($res >= 1){
            redirect('index.php/Dashbor');
        }

    }
}