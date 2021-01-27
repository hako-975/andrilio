<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio_model', 'pomo');
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Role_model', 'romo');
		$this->load->model('User_model', 'usmo');
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

		$data['title'] 		= 'Pengguna';
		$data['user']		= $this->usmo->getUser();
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function insertUser()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 		= 'Tambah Pengguna';
		$data['role'] 		= $this->romo->getRole();
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('id_role', 'Role', 'required|trim|is_natural_no_zero');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password_verify]');
		$this->form_validation->set_rules('password_verify', 'Verifikasi Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('user/insert_user', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->usmo->insertUser();
		}
	}

	public function updateUser($id)
	{
		$this->checkLoginAdmin();
		
		$user = $this->usmo->getUserById($id);

		$data['title'] 		= 'Ubah Pengguna - ' . $user['username'];
		$data['user']		= $user;
		$data['role'] 		= $this->romo->getRole();
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('id_role', 'Role', 'required|trim|is_natural_no_zero');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('user/update_user', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->usmo->updateUser($id);
		}
	}

	public function deleteUser($id)
	{
		$this->usmo->deleteUser($id);
	}
}
