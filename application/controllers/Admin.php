<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */