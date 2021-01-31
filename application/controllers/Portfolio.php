<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portfolio_model', 'pomo');
		$this->load->model('Section_model', 'semo');
		$this->load->model('SosialMedia_model', 'somemo');
		$this->load->model('Galeri_model', 'gamo');
		$this->load->model('Kontak_model', 'komo');
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
		
		$data['title'] 			= 'Portfolio';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['section'] 		= $this->semo->getSection();
		$data['sosial_media'] 	= $this->somemo->getSosialMedia();
		$data['galeri'] 		= $this->gamo->getGaleri();
		$data['kontak'] 		= $this->komo->getKontak();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('portfolio/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}
}
