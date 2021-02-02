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

	public function updateTitleAndImgFavicon()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Title dan Favicon';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_title_and_img_favicon', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateTitleAndImgFavicon();
		}
	}

	public function updateImgNavbarBrand()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Navbar Brand';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('dump_validation', 'Dump Validation', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_img_navbar_brand', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateImgNavbarBrand();
		}
	}

	public function updateImgProfile()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Foto Profil';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('dump_validation', 'Dump Validation', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_img_profile', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateImgProfile();
		}
	}

	public function updateImgJumbotron()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Background Jumbotron';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('dump_validation', 'Dump Validation', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_img_jumbotron', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateImgJumbotron();
		}
	}

	public function updateHeading1()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Heading 1';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('heading_1', 'Heading 1', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_heading_1', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateHeading1();
		}
	}

	public function updateHeading2()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Heading 2';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('heading_2', 'Heading 2', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_heading_2', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateHeading2();
		}
	}

	public function updateFooter()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 			= 'Ubah Footer';
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['dataUser'] 		= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('footer', 'Footer', 'required|trim');
		if ($this->form_validation->run() == false) {
		    $this->load->view('templates/admin/header-admin', $data);
			$this->load->view('portfolio/update_footer', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->pomo->updateFooter();
		}
	}
}