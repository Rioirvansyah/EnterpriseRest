<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_maskapai extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->API="http://localhost:82/TiketEnterpriseServer/index.php";
}

  public function index()
  {
  	 $data['maskapai'] = json_decode($this->curl->simple_get($this->API.'/Maskapai'));

    $this->load->view('adm_maskapai', $data);
  }

function create(){
     if(isset($_POST['submit'])){
        $data = array(
                // 'id_berita' => $this->input->post('id_berita'),
            'nama_maskapai' => $this->input->post('nama_maskapai'),
            'alamat_maskapai'=> $this->input->post('alamat_maskapai'),
            'telepon_maskapai' => $this->input->post('telepon_maskapai'),
        	'website_maskapai'=> $this->input->post('website_maskapai'),
        	'gambar_maskapai'=> $this->input->post('gambar_maskapai'));
        $insert = $this->curl->simple_post($this->API.'/maskapai', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
        redirect('adm_maskapai');
    }else{
        $data['maskapai'] = json_decode($this->curl->simple_get($this->API.'/maskapai'));
        $this->load->view('create_maskapai', $data);
    }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'kode_maskapai' => $this->uri->segment(3),
                'nama_maskapai'=> $this->input->post('nama_maskapai'),
                'alamat_maskapai' => $this->input->post('alamat_maskapai'),
                'telepon_maskapai' => $this->input->post('telepon_maskapai'),
            	'website_maskapai' => $this->input->post('website_maskapai'));
            
            $update = $this->curl->simple_put($this->API.'/maskapai', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }
            else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('adm_maskapai');
        }else{
            
            $params = array('kode_maskapai'=> $this->uri->segment(3));
            $data['maskapai'] = json_decode($this->curl->simple_get($this->API.'/maskapai',$params));
            // var_dump($data['berita']);
            // die();
            $this->load->view('edit_maskapai',$data);
        }
    }

    function delete($kode_maskapai){
     if(empty($kode_maskapai)){
        redirect('adm_maskapai');
    }else{
        $delete = $this->curl->simple_delete($this->API.'/maskapai', array('kode_maskapai'=>$kode_maskapai), array(CURLOPT_BUFFERSIZE => 10));
        if($delete)
        {
            $this->session->set_flashdata('hasil','Delete Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Delete Data Gagal');
        }
        redirect('adm_maskapai');
    }
    }
}