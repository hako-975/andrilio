<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		
		$this->load->view('templates/landing/header-landing', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('templates/landing/footer-landing', $data);
	}
}
