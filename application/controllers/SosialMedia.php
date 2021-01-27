<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SosialMedia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SosialMedia_model', 'somemo');
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
		$data['title'] = 'Sosial Media';
		$data['sosialMedia'] = $this->somemo->getSosialMedia();
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('sosial_media/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function insertSosialMedia()
	{
		$this->checkLoginAdmin();

		$data['title'] = 'Tambah Sosial Media';
		$data['sosialMedia'] = $this->somemo->getSosialMedia();
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->form_validation->set_rules('nama_sosial_media', 'Nama Sosial Media', 'required|trim|is_unique[sosial_media.nama_sosial_media]');
		$this->form_validation->set_rules('icon_sosial_media', 'Icon Sosial Media', 'required|trim');
		$this->form_validation->set_rules('link_sosial_media', 'Link Sosial Media', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('sosial_media/insert_sosial_media', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->somemo->insertSosialMedia();
		}
	}

	public function updateSosialMedia($id)
	{
		$this->checkLoginAdmin();

		$data['title'] = 'Tambah Sosial Media';
		$data['sosialMedia'] = $this->somemo->getSosialMediaById($id);
		$data['portfolio'] = $this->pomo->getPortfolio();
		$data['dataUser'] = $this->admo->getDataUser();
		
		$this->form_validation->set_rules('nama_sosial_media', 'Nama Sosial Media', 'required|trim');
		$this->form_validation->set_rules('icon_sosial_media', 'Icon Sosial Media', 'required|trim');
		$this->form_validation->set_rules('link_sosial_media', 'Link Sosial Media', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('sosial_media/update_sosial_media', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->somemo->updateSosialMedia($id);
		}
	}

	public function deleteSosialMedia($id)
	{
		$this->checkLoginAdmin();
		$this->somemo->deleteSosialMedia($id);
	}
}
