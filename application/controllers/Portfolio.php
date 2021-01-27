<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}
}
