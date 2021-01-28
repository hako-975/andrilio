<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portfolio_model', 'pomo');
		$this->load->model('Pesan_model', 'pemo');
		$this->load->model('Admin_model', 'admo');
	}

	public function checkLoginAdmin()
	{
		if (($this->session->userdata('username') && $this->session->userdata('id_role')) == false) {
			redirect('auth/logout');
		}
	}

	public function index()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 		= 'Pesan';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['pesan']		= $this->pemo->getPesan();
		$data['dataUser'] 	= $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('pesan/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}
}
