<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_tiket extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->API="http://localhost:81/EnterpriseRestServer/index.php";
}

  public function index()
  {
  	 $data['tiket'] = json_decode($this->curl->simple_get($this->API.'/Tiket'));

    $this->load->view('adm_tiket', $data);
  }

function create(){
     if(isset($_POST['submit'])){
        $data = array(
                // 'id_berita' => $this->input->post('id_berita'),
            'no_ktp' => $this->input->post('no_ktp'),
            'no_penerbangan'=> $this->input->post('no_penerbangan'),
            'jumlah' => $this->input->post('jumlah'),
        	'harga_total'=> $this->input->post('harga_total'));
        	
        $insert = $this->curl->simple_post($this->API.'/tiket', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
        redirect('adm_tiket');
    }else{
        $data['tiket'] = json_decode($this->curl->simple_get($this->API.'/tiket'));
        $data['penumpang'] = json_decode($this->curl->simple_get($this->API.'/penumpang'));
        $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/penerbangan'));
        $this->load->view('create_tiket',$data);
    }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_tiket' => $this->input->post('id_tiket'),
                'no_ktp'=> $this->input->post('no_ktp'),
                'no_penerbangan' => $this->input->post('no_penerbangan'),
                'jumlah' => $this->input->post('jumlah'),
            	'harga_total' => $this->input->post('harga_total'));
            $update = $this->curl->simple_put($this->API.'/tiket', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }
            else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('adm_tiket');
        }else{
            
            $params = array('id_tiket'=> $this->uri->segment(3));
            $data['tiket'] = json_decode($this->curl->simple_get($this->API.'/tiket',$params));
            // var_dump($data['berita']);
            // die();
            $this->load->view('edit_tiket',$data);
        }
    }

    function delete($id_tiket){
     if(empty($id_tiket)){
        redirect('adm_tiket');
    }else{
        $delete = $this->curl->simple_delete($this->API.'/tiket', array('id_tiket'=>$id_tiket), array(CURLOPT_BUFFERSIZE => 10));
        if($delete)
        {
            $this->session->set_flashdata('hasil','Delete Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Delete Data Gagal');
        }
        redirect('adm_tiket');
    }
    }
}