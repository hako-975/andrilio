<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	public function __construct()
	{
		$this->load->model('Auth_model', 'aumo');
	}

	// ------------------ START GET ------------------
	public function getDataUser()
	{
		$this->db->join('role', 'role.id_role = user.id_role');
		return $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
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
		$this->session->set_flashdata('message-success', 'updateProfile');
		redirect('auth/logout');
	}
	// ------------------ END UPDATE ------------------
}