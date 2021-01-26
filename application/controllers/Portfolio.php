<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		
		$this->load->view('templates/portfolio/header-portfolio', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/portfolio/footer-portfolio', $data);
	}
}
