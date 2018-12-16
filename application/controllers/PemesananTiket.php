<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananTiket extends CI_Controller {

	var $API = "";
    var $login = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost:82/TiketEnterpriseServer/index.php";
        $this->login = $this->session->userdata('penumpang');
        
        if(!isset($this->login)){
            echo "<script>alert('Anda Harus login Terlebih Dahulu untuk bisa meminjam');
            window.location.href='home';</script>";
        }
        else{
            return true;
        }
    }

	public function index()
    {
        $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/Penerbangan'));
        $data['username'] = $this->login;
        $this->load->view('pemesanantiket', $data);
    }

    public function pesan()
    {
         if(isset($_POST['submit'])){
            $data = array(
                'no_ktp' =>  $this->input->post('no_ktp'),
                'no_penerbangan' =>  $this->input->post('no_penerbangan'),
                'jumlah'		 =>  $this->input->post('jumlah'),
                'harga_total'    =>  $this->input->post('harga_total'));

            $insert =  $this->curl->simple_post($this->API.'/tiket', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('pemesanantiket');
        }else{
            $data['pemesanantiket'] = json_decode($this->curl->simple_get($this->API.'/tiket'));
            $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/Penerbangan'));
            $this->load->view('pemesanantiket',$data);
        }
    }
}

/* End of file PemesananTiket.php */
/* Location: ./application/controllers/PemesananTiket.php */