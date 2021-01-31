<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	public function __construct()
	{
		$this->load->model('Auth_model', 'aumo');
		$this->load->model('Log_model', 'lomo');
	}

	// ------------------ START GET ------------------
	public function getDataUser()
	{
		$this->db->join('role', 'role.id_role = user.id_role');
		return $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
	}

	public function getDataUserById($id)
	{
		$this->db->join('role', 'role.id_role = user.id_role');
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function getCountRows($table)
	{
		return $this->db->get($table)->num_rows();
	}
	// ------------------ END GET ------------------

	// ------------------ START UPDATE ------------------
	public function changePassword()
	{
		$password_lama = $this->input->post('password_lama', true);
		$password_baru = $this->input->post('password', true);

		if (password_verify($password_lama, $this->getDataUser()['password'])) {
			$password = password_hash($password_baru, PASSWORD_DEFAULT);
			$email = $this->session->userdata('email');
			$this->aumo->updatePasswordByEmail($password, $email);
			$this->session->set_flashdata('message-success', 'Password berhasil diganti!');
			redirect('admin/profile');
		} else {
			$this->session->set_flashdata('message-failed', 'Password gagal diganti! Password lama yang anda masukkan salah');
			redirect('admin/changePassword');
		}
	}

	public function updateProfile()
	{
		$checkUsername 	= $this->db->get_where('user', ['username' => $this->input->post('username', true)])->row_array();
		$checkEmail 	= $this->db->get_where('user', ['email' => $this->input->post('email', true)])->row_array();

		if ($checkUsername['username'] == $this->getDataUser()['username']) {
			if ($checkEmail) {
				$this->session->set_flashdata('message-failed', 'profil gagal diubah! email tidak boleh sama dengan yang sudah ada');
				redirect('admin/updateProfile');
			}
		} elseif ($checkEmail['email'] == $this->getDataUser()['email']) {
			if ($checkUsername) {
				$this->session->set_flashdata('message-failed', 'profil gagal diubah! username tidak boleh sama dengan yang sudah ada');
				redirect('admin/updateProfile');
			}
		}

		$data = [
			'username' => $this->input->post('username', true),
			'email' => $this->input->post('email', true)
		];
		$this->db->update('user', $data, ['id_user' => $this->getDataUser()['id_user']]);
		$this->lomo->insertLog('Pengguna <b>' . $data['username'] . '</b> | <b>' . $data['email'] . '</b> berhasil mengubah profil');
		$this->session->set_flashdata('message-success', 'updateProfile');
		redirect('auth/logout');
	}
	// ------------------ END UPDATE ------------------

	// ------------------ START CHECK ROLE is Admin ------------------
	public function checkRoleIsAdmin($isi)
	{
		$id_role  = $this->getDataUser()['id_role'];
		$username = $this->getDataUser()['username'];

		if ($id_role != '1') {
			$this->session->set_flashdata('message-failed', 'Pengguna ' . $username . ' tidak memiliki hak akses untuk ' . $isi . ', segera hubungi administrator untuk info lebih lanjut');
			$this->lomo->insertLog('Pengguna <b>' . $username . '</b> mencoba ' . $isi);
			redirect('admin');
		}
	}
	// ------------------ END CHECK ROLE is Admin ------------------

}