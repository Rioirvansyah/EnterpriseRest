<?php
class Adm_penerbangan extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->API="http://localhost:81/EnterpriseRestServer/index.php";
    }

  public function index()
  {
  	 $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/penerbangan'));
     $data['maskapai'] = json_decode($this->curl->simple_get($this->API.'/maskapai'));
    $this->load->view('adm_penerbangan', $data);
  }

function create(){
     if(isset($_POST['submit'])){
        $data = array(
                // 'id_berita' => $this->input->post('id_berita'),
            'no_penerbangan' => $this->input->post('no_penerbangan'),
            'kode_maskapai' => $this->input->post('kode_maskapai'),
            'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
            'tujuan' => $this->input->post('tujuan'),
            'waktu_berangkat'=> $this->input->post('waktu_berangkat'),
            'waktu_sampai'=> $this->input->post('waktu_sampai'),
            'keterangan' => $this->input->post('keterangan'));
        $insert = $this->curl->simple_post($this->API.'/penerbangan', $data, array(CURLOPT_BUFFERSIZE => 10));
        if($insert)
        {
            $this->session->set_flashdata('hasil','Insert Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Insert Data Gagal');
        }
        redirect('adm_penerbangan');
    }else{
        $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/penerbangan'));
        $data['maskapai'] = json_decode($this->curl->simple_get($this->API.'/maskapai'));
        $this->load->view('create_penerbangan', $data);
    }
    }

    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'no_penerbangan' => $this->uri->segment(3),
                'kode_maskapai' => $this->input->post('kode_maskapai'),
                'tanggal_berangkat' => $this->input->post('tanggal_berangkat'),
                'tujuan' => $this->input->post('tujuan'),
                'waktu_berangkat'=> $this->input->post('waktu_berangkat'),
                'waktu_sampai'=> $this->input->post('waktu_sampai'),
                'keterangan' => $this->input->post('keterangan'));
            $update = $this->curl->simple_put($this->API.'/penerbangan', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }
            else
            {
                $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('adm_penerbangan');
        }else{
            
            $params = array('no_penerbangan'=> $this->uri->segment(3));
            $data['penerbangan'] = json_decode($this->curl->simple_get($this->API.'/penerbangan',$params));
            // var_dump($data['berita']);
            // die();
            $this->load->view('edit_penerbangan',$data);
        }
    }

    function delete($no_penerbangan){
     if(empty($no_penerbangan)){
        redirect('adm_penerbangan');
    }else{
        $delete = $this->curl->simple_delete($this->API.'/penerbangan', array('no_penerbangan'=>$no_penerbangan), array(CURLOPT_BUFFERSIZE => 10));
        if($delete)
        {
            $this->session->set_flashdata('hasil','Delete Data Berhasil');
        }else
        {
            $this->session->set_flashdata('hasil','Delete Data Gagal');
        }
        redirect('adm_penerbangan');
    }
    }
}

