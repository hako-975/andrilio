<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model', 'lomo');
		$this->load->model('Admin_model', 'admo');
	}

	// ------------------ START GET ------------------
	public function getUser()
	{
		$this->db->join('role', 'role.id_role = user.id_role');
		return $this->db->get('user')->result_array();
	}

	public function getUserById($id)
	{
		$this->db->join('role', 'role.id_role = user.id_role');
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START INSERT ------------------
	public function insertUser()
	{
		$this->admo->checkRoleIsAdmin('menambahkan pengguna');

		$is_active = $this->input->post('is_active', true);
		if ($is_active == null) {
			$is_active = 0;
		}
		$data = [
			'username' => $this->input->post('username', true),
			'email' => $this->input->post('email', true),
			'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
			'id_role' => $this->input->post('id_role', true),
			'date_created' => time(),
			'is_active' => $is_active
		];

		$this->db->insert('user', $data);
		$this->lomo->insertLog('Pengguna <b>' . $data['username'] . '</b> berhasil ditambahkan');
		$this->session->set_flashdata('message-success', 'pengguna ' . $data['username'] . ' berhasil ditambahkan');
		redirect('user/index');
	}
	// ------------------ END INSERT ------------------

	// ------------------ START UPDATE ------------------
	public function updateUser($id)
	{
		$this->admo->checkRoleIsAdmin('mengubah pengguna dengan id ' . $id);
		
		$id_role = $this->admo->getDataUserById($id)['id_role'];

		if ($id_role == '1') {
			$this->session->set_flashdata('message-failed', 'Pengguna ' . $this->admo->getDataUser()['username'] . ' tidak dapat mengubah pengguna dengan role administrator');
			$this->lomo->insertLog('Pengguna <b>' . $this->admo->getDataUser()['username'] . '</b> mencoba mengubah pengguna dengan role administrator');
			redirect('admin');
		}

		$user = $this->getUserById($id);

		$data = [
			'id_role' 	=> $this->input->post('id_role', true),
			'is_active' => $this->input->post('is_active', true)
		];


		$this->db->update('user', $data, ['id_user' => $id]);
		$this->lomo->insertLog('Pengguna <b>' . $user['username'] . '</b> berhasil diubah');
		$this->session->set_flashdata('message-success', 'pengguna ' . $user['username'] . ' berhasil diubah');
		redirect('user/index');
	}
	// ------------------ END UPDATE ------------------
	
	// ------------------ START DELETE ------------------
	public function deleteUser($id)
	{
		$this->admo->checkRoleIsAdmin('menghapus pengguna dengan id ' . $id);

		$id_role = $this->admo->getDataUserById($id)['id_role'];

		if ($id_role == '1') {
			$this->session->set_flashdata('message-failed', 'Pengguna ' . $this->admo->getDataUser()['username'] . ' tidak dapat menghapus pengguna dengan role administrator');
			$this->lomo->insertLog('Pengguna <b>' . $this->admo->getDataUser()['username'] . '</b> mencoba menghapus pengguna dengan role administrator');
			redirect('admin');
		}

		$username = $this->getUserById($id)['username'];
		$this->db->delete('user', ['id_user' => $id]);
		$this->lomo->insertLog('Pengguna <b>' . $username . '</b> berhasil diubah');
		$this->session->set_flashdata('message-success', 'pengguna ' . $username . ' berhasil dihapus');
		redirect('user/index');
	}
	// ------------------ END DELETE ------------------
}
