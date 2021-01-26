<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio_model', 'pomo');
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

		$data['title'] 		= 'Dasbor';
		$data['landing'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}
}
