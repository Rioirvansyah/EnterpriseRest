
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	var $API = "";
    var $login = "";

    function __construct()	
    {
        parent::__construct();
        $this->API = "http://localhost:82/TiketEnterpriseServer/index.php";
        
        $this->login = $this->session->userdata('penumpang');
        
        if(!isset($this->login)){
            // echo "<script>alert('login dulu');
            // window.location.href='home';</script>";
        }
        else{
            return true;
        }
    }

	public function index()
	{
		$data['username'] = $this->login; 
		$this->load->view('index', $data);
	}

    public function admin()
    {
        $data['username'] = $this->login; 
        $this->load->view('loginadmin', $data);
    }
    public function login_admin(){
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            if($username == 'admin' && $password == 'admin'){
                redirect("admin");         
            }
            else{
                echo "username & password salah";
            }                   
        } else {
            echo "gagal";
        }        
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login/');
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */