<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	public function kedatangan()
	{
		$this->load->view('panduankedatangan');
	}

	public function keberangkatan()
	{
		$this->load->view('panduankeberangkatan');
	}

	public function transit()
	{
		$this->load->view('panduantransit');
	}

	public function keamanan()
	{
		$this->load->view('panduankeamanan');
	}	

}

/* End of file Panduan.php */
/* Location: ./application/controllers/Panduan.php */