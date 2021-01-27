<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('portfolio_model', 'pomo');
		$this->load->model('Admin_model', 'admo');
		$this->load->model('Auth_model', 'aumo');
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
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function profile()
	{
		$this->checkLoginAdmin();

		$data['title'] 		= 'Profil';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->load->view('templates/admin/header-admin', $data);
		$this->load->view('admin/profile', $data);
		$this->load->view('templates/admin/footer-admin', $data);
	}

	public function changePassword()
	{
		$this->checkLoginAdmin();
		
		$data['title'] 		= 'Ganti Password';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_verify]', [
			'matches' => 'Password tidak sama dengan password verifikasi',
			'min_length' => 'Password terlalu pendek'
		]);
		$this->form_validation->set_rules('password_verify', 'Password Verify', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('admin/change_password', $data);
			$this->load->view('templates/admin/footer-admin', $data);
			$this->load->view('templates/show_hide_password_registration', $data);	
		} else {
			$this->admo->changePassword();
		}
	}

	public function updateProfile()
	{
		$this->checkLoginAdmin();

		$data['title'] 		= 'Ubah Profil';
		$data['portfolio'] 	= $this->pomo->getPortfolio();
		$data['dataUser'] 	= $this->admo->getDataUser();

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/admin/header-admin', $data);
			$this->load->view('admin/update_profile', $data);
			$this->load->view('templates/admin/footer-admin', $data);
		} else {
		    $this->admo->updateProfile();
		}
	}
}
