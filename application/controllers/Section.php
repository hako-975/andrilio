<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Section_model', 'semo');
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

		$data['title'] = 'Section';
		$data['section'] = $this->semo->getSection();
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('section/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function insertSection()
	{
		$this->checkLoginAdmin();

		$data['title'] 		= 'Tambah Section';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('nama_section', 'Nama Section', 'required|trim|is_unique[section.nama_section]');
		$this->form_validation->set_rules('konten_section', 'Konten Section', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('section/insert_section', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->semo->insertSection();
		}
	}

	public function updateSection($id)
	{
		$this->checkLoginAdmin();

		$data['section']	= $this->semo->getSectionById($id);
		$data['title'] 		= 'Ubah Section - ' . $data['section']['nama_section'];
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();
		
		$this->form_validation->set_rules('nama_section', 'Nama Section', 'required|trim');
		$this->form_validation->set_rules('konten_section', 'Konten Section', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('section/update_section', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->semo->updateSection($id);
		}
	}

	public function deleteSection($id)
	{
		$this->checkLoginAdmin();
		
		$this->semo->deleteSection($id);
	}
}
