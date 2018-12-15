<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_penumpang extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->API="http://localhost:81/EnterpriseRestServer/index.php";
}

  public function index()
  {
  	 $data['penumpang'] = json_decode($this->curl->simple_get($this->API.'/penumpang'));

    $this->load->view('adm_penumpang', $data);
  }

function create(){
     if(isset($_POST['submit'])){
        $data = array(
                // 'id_berita' => $this->input->post('id_berita'),
            'nama_penumpang' => $this->input->post('nama_penumpang'),
            'telepon_penumpang' => $this->input->post('telepon_penumpang'),
            'email_penumpang'=> $this->input->post('email_penumpang'),
        	'jenis_penumpang'=> $this->input->post('jenis_penumpang'),
        	'username'=> $this->input->post('username'),
        	'password'=> $this->input->post('password'));
        $insert = $this->curl->simple_post($this->API.'/penumpang', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
        redirect('adm_penumpang');
    }else{
        $data['penumpang'] = json_decode($this->curl->simple_get($this->API.'/penumpang'));
        $this->load->view('create_penumpang',$data);
    }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'no_ktp' => $this->input->post('no_ktp'),
                'nama_penumpang'=> $this->input->post('nama_penumpang'),
                'telepon_penumpang' => $this->input->post('telepon_penumpang'),
                'email_penumpang' => $this->input->post('email_penumpang'),
            	'jenis_penumpang' => $this->input->post('jenis_penumpang'),
            	'username' => $this->input->post('username'),
            	'password'=> $this->input->post('password'));
            $update = $this->curl->simple_put($this->API.'/penumpang', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }
            else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('adm_penumpang');
        }else{
            
            $params = array('no_ktp'=> $this->uri->segment(3));
            $data['penumpang'] = json_decode($this->curl->simple_get($this->API.'/penumpang',$params));
            // var_dump($data['berita']);
            // die();
            $this->load->view('edit_penumpang',$data);
        }
    }

    function delete($no_ktp){
     if(empty($no_ktp)){
        redirect('adm_penumpang');
    }else{
        $delete = $this->curl->simple_delete($this->API.'/penumpang', array('no_ktp'=>$no_ktp), array(CURLOPT_BUFFERSIZE => 10));
        if($delete)
        {
            $this->session->set_flashdata('hasil','Delete Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Delete Data Gagal');
        }
        redirect('adm_penumpang');
    }
    }
}