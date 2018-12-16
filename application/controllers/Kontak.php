<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

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
		$this->load->view('kontak',$data);
	}

	function create()
    {
         if(isset($_POST['submit'])){
            $data = array(
                'nama_kontak'       =>  $this->input->post('nama'),
                'email_kontak'      =>  $this->input->post('email'),
                'subyek_kontak'		=>  $this->input->post('subyek'),
                'pesan'    			=>  $this->input->post('pesan'));
            $insert =  $this->curl->simple_post($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('kontak');
        }else{
            $data['kontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
            $this->load->view('kontak',$data);
        }
    }
}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */
