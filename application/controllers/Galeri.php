<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Galeri_model', 'gamo');
		$this->load->model('Portfolio_model', 'pomo');
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

		$data['title'] = 'Galeri';
		$data['galeri'] = $this->gamo->getGaleri();
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('galeri/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function insertGaleri()
	{
		$this->checkLoginAdmin();

		$data['title'] 		= 'Tambah Galeri';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('dump_validation', 'Dump Validation', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('galeri/insert_galeri', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->gamo->insertGaleri();
		}
	}

	public function updateGaleri($id)
	{
		$this->checkLoginAdmin();

		$data['galeri']	= $this->gamo->getGaleriById($id);
		$data['title'] 		= 'Ubah Galeri - ' . $data['galeri']['img_galeri'];
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('dump_validation', 'Dump Validation', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('galeri/update_galeri', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->gamo->updateGaleri($id);
		}
	}

	public function deleteGaleri($id)
	{
		$this->checkLoginAdmin();
		
		$this->gamo->deleteGaleri($id);
	}
}
