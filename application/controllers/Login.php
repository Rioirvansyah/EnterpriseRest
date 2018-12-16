<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login', $data);
	}

	public function proses_login(){
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $params = array('username'=> $username,'password'=>$password);
            
            $loginadm = $this->curl->simple_post($this->API.'/penumpang/login', $params,array(CURLOPT_BUFFERSIZE => 10));
            $a = json_decode($loginadm);
            $a = array(
                'no_ktp' => $a
            );
            $data = json_decode($this->curl->simple_get($this->API.'/penumpang',$a));
           
            if($loginadm){
                if($data){
                    $session = array(
                    'no_ktp'  =>  $a,
                    'username'  =>  $username,
                    'password'  =>  $password
                    );
                    $sess = $this->session->set_userdata('penumpang',$session);
                    redirect("home");         
                }else{
                    echo "username & password tidak ada";
                }                   
            }
            else{
                 echo "salah";
            }
        } else {
            echo "gagal";
        }        
    }
         
    public function logout() {
            $this->session->sess_destroy();
            redirect('index.php/admin');
    }	

	public function register()
	{
		 if(isset($_POST['submit'])){
            $data = array(
                'no_ktp' => $this->input->post('no_ktp'),
                'nama_penumpang' => $this->input->post('nama_penumpang'),
                'telepon_penumpang'   => $this->input->post('telepon_penumpang'),
                'email_penumpang'    => $this->input->post('email_penumpang'),
                'jenis_penumpang'    => $this->input->post('jenis_penumpang'),
                'username'    => $this->input->post('username'),
                'password'    => $this->input->post('password'));
            $insert =  $this->curl->simple_post($this->API.'/penumpang', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('login');
        }else{
            $data['register'] = json_decode($this->curl->simple_get($this->API.'/penumpang'));
            $this->load->view('register',$data);
        }
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */