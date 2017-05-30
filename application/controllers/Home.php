<!--controller utk register-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct() {
	parent::__construct();
	$this->load->model('Buzz_Model');
	$this->load->model('M_register');
	}

	public function index()
    {
		$this->load->helper('form');
		$this->load->view('register');
	}

	public function submit(){
		$angka=range(0,9); //code dibuat dari angka 0-9
		shuffle($angka); //untuk mengacak angka
		$ambilangka=array_rand($angka,6); //pengambilan angka sebanyak 6 digit
		$angkastring=implode("",$ambilangka); //membuat angka-angka yang digenerate dipisahkan dengan -
		$code=$angkastring;


		//passing post data dari view
		$this->load->helper(array('form', 'url'));
		$first_name= $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$country = $this->input->post('country');
		$address = $this->input->post('address');
		$city= $this->input->post('city');
		$zipcode= $this->input->post('zipcode');
		
		//memasukan ke array
		$data = array(
			'first_name' => $first_name,
			'last_name' => $last_name,
			'address' => $address,
			'city' => $city,
			'country' => $country,
			'zipcode' => $zipcode,
			'email' => $email,
			'username' => $username,
			'password' => sha1($password),
			'active' => $code
		);

		//tambahkan akun ke database
		
	       $this->M_register->add_account($data);
		
		//enkripsi id
		//$encrypted_id = md5($id);
$config = array(
            'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.gmail.com',
              'smtp_port' => 465,
             'smtp_user' => 'hotelhart@gmail.com', // change it to yours
             'smtp_pass' => 'Hotelhart007', // change it to yours
             'mailtype' => 'html',
             'charset' => 'UTF-8',
             'wordwrap' => TRUE
          ); 
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('hotelhart@gmail.com');
        $this->email->to($email);


        $this->email->subject("Kode User anda untuk dapat diskon");
        $this->email->message("Kode User anda adalah $code" );

		
		if($this->email->send())
		{
			//echo "Berhasil melakukan registrasi, silahkan cek kode di email kamu";
			//echo $code;
			$this->load->view('berhasil');

		}else
		{
			//echo "Berhasil melakukan registrasi, namu gagal mengirim kode ke email";
			//echo $code;
			//$this->load->view('berhasil');
echo "tak berhasil kirim email, namun sudah tersimpan di DB,akan segera kami kirimkan kode anda";
		}
		echo "<br><br><a href='".site_url('http://hotelhart.000webhostapp.com/')."'>Kembali ke Menu UTAMA</a>";
	}
	
	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('m_register');
		$this->m_register->changeActiveState($key);
		echo "Selamat kamu telah memverifikasi akun kamu";
		echo "<br><br><a href='".site_url("login")."'>Kembali ke Menu Login</a>";
	}








	function log_in() {
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[5]');
			if($this->form_validation->run()==TRUE){
				$username=$_POST['username'];
				$password=$_POST['password'];
				//check user in database
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where(array('username'=> $username,'password' => $password));
				$query = $this->db->get();
				$user = $query->row();
				if($user->username){
					/**tambahin session dan log out(session destroy)*/
					redirect("home/index");
				}else{
					$this->session->set_flashdata("errors","No such account exist in database");
					redirect("home/log_in","refresh");
				}
			}

			$this->load->view('log_in');
		}

		function register() {
			if(isset($_POST['register'])){
				$this->form_validation->set_rules('first_name','First name','required');
				$this->form_validation->set_rules('last_name','Last name','required');
				$this->form_validation->set_rules('address','Address','required');
				$this->form_validation->set_rules('country','Country','required');
				$this->form_validation->set_rules('zipcode','Zipcode','required');
				$this->form_validation->set_rules('city','City','required');
				$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('username','Username','required');
				$this->form_validation->set_rules('password','Password','required|min_length[5]');

				//$this->form_validation->set_rules('phone','Phone','required|min_length [5]');
				//edit sesuai form sign up
				if($this->form_validation->run()==TRUE){	
					$data = array(
						'first_name' => $_POST['first_name'],
						'last_name' => $_POST['last_name'],
						'address' => $_POST['address'],
						'city' => $_POST['city'],
						'country' => $_POST['country'],
						'zipcode' => $_POST['zipcode'],
						'email' => $_POST['email'],
						'username' => $_POST['username'],
						'password' => $_POST['password']

					);
					$this->db->insert('member',$data);
					
					//$this->session->set_flashdata("success","Your account has been register.You can Login now");
					//redirect("index.php/Home/register","refresh");
				}}
			
			$this->load->view('register');
		}

		function readData() {
		$data = $this->Buzz_Model->getData();
		$this->load->view('Buzz', array('data' => $data));
	}

	function goHomepage(){
    $this->load->view('homepage');
  }

 public function event()
	{
		$this->load->view('event');
	}


}