<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portfolio_model', 'pomo');
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Log_model', 'lomo');
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

		$data['title'] = 'Log';
		$data['log'] = $this->lomo->getLog();
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('log/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

}