<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbangan extends CI_Controller {

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
        $data['penerbangan'] = json_decode($this->curl->simple_get($this->API . '/penerbangan'));
        $this->load->view('infopenerbangan', $data);
    }
}

/* End of file Penerbangan.php */
/* Location: ./application/controllers/Penerbangan.php */