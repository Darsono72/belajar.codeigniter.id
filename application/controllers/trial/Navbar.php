<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navbar extends CI_Controller {

	public function index()
	{
		$data['title']='Navigation Bar';
		$data['sub_title']='Day #10';

		$this->load->view('trial/navbar_v', $data);
	}

}

/* End of file Navbar.php */
/* Location: ./application/controllers/trial/Navbar.php */