<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model', 'lomo');
	}

	// ------------------ START GET ------------------
	public function getRole()
	{
		return $this->db->get('role')->result_array();
	}

	public function getRoleById($id)
	{
		return $this->db->get_where('role', ['id_role' => $id])->row_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START INSERT ------------------
	public function insertRole()
	{
		$data = [
			'nama_role' => $this->input->post('nama_role', true)
		];

		$this->db->insert('role', $data);
		$this->lomo->insertLog('Role <b>' . $data['nama_role'] . '</b> berhasil ditambahkan');
		$this->session->set_flashdata('message-success', 'Role ' . $data['nama_role'] . ' berhasil ditambahkan');
		redirect('role/index');
	}
	// ------------------ END INSERT ------------------

	// ------------------ START UPDATE ------------------
	public function updateRole($id)
	{
		$data = [
			'nama_role' => $this->input->post('nama_role', true)
		];

		$this->db->update('role', $data, ['id_role' => $id]);
		$this->lomo->insertLog('Role <b>' . $data['nama_role'] . '</b> berhasil diubah');
		$this->session->set_flashdata('message-success', 'Role ' . $data['nama_role'] . ' berhasil diubah');
		redirect('role/index');
	}
	// ------------------ END UPDATE ------------------

	// ------------------ START DELETE ------------------
	public function deleteRole($id)
	{
		$nama_role = $this->getRoleById($id)['nama_role'];
		
		$this->db->delete('role', ['id_role' => $id]);
		$this->lomo->insertLog('Role <b>' . $nama_role . '</b> berhasil dihapus');
		$this->session->set_flashdata('message-success', 'Role ' . $nama_role . ' berhasil dihapus');
		redirect('role/index');
	}
	// ------------------ END DELETE ------------------
}