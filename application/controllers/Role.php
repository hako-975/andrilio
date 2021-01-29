<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio_model', 'pomo');
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Role_model', 'romo');
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

		$data['title'] 		= 'Role';
		$data['role']		= $this->romo->getRole();
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('role/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function insertRole()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 		= 'Tambah Role';
		$data['role'] 		= $this->romo->getRole();
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('nama_role', 'Nama Role', 'required|trim|is_unique[role.nama_role]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('role/insert_role', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->romo->insertRole();
		}
	}

	public function updateRole($id)
	{
		$this->checkLoginAdmin();
		
		$role = $this->romo->getRoleById($id);

		$data['title'] 		= 'Ubah Role - ' . $role['nama_role'];
		$data['role']		= $role;
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('nama_role', 'Nama Role', 'required|trim|is_unique[role.nama_role]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('role/update_role', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->romo->updateRole($id);
		}
	}

	public function deleteRole($id)
	{
		$this->checkLoginAdmin();
		$this->romo->deleteRole($id);
	}
}
