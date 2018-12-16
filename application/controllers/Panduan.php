<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

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

	public function kedatangan()
	{
		$data['username'] = $this->login;
		$this->load->view('panduankedatangan',$data);
	}

	public function keberangkatan()
	{
		$data['username'] = $this->login;
		$this->load->view('panduankeberangkatan',$data);
	}

	public function transit()
	{
		$data['username'] = $this->login;
		$this->load->view('panduantransit',$data);
	}

	public function keamanan()
	{
		$data['username'] = $this->login;
		$this->load->view('panduankeamanan',$data);
	}	

}

/* End of file Panduan.php */
/* Location: ./application/controllers/Panduan.php */