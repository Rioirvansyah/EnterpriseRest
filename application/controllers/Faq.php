<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	var $API = "";
	var $login = "";

	public function __construct()
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
		$this->load->view('faq', $data);
	}

}

/* End of file Faq.php */
/* Location: ./application/controllers/Faq.php */