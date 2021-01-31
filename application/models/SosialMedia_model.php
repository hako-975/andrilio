<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SosialMedia_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model', 'lomo');
		$this->load->model('Admin_model', 'admo');
	}

	// ------------------ START GET ------------------
	public function getSosialMedia()
	{
		return $this->db->get('sosial_media')->result_array();
	}

	public function getSosialMediaById($id)
	{
		return $this->db->get_where('sosial_media', ['id_sosial_media' => $id])->row_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START INSERT ------------------
	public function insertSosialMedia()
	{
		$data = [
			'nama_sosial_media' => $this->input->post('nama_sosial_media', true),
			'icon_sosial_media' => $this->input->post('icon_sosial_media', true),
			'link_sosial_media' => $this->input->post('link_sosial_media', true)
		];

		$this->db->insert('sosial_media', $data);
		$this->lomo->insertLog('Sosial Media <b>' . $data['nama_sosial_media'] . '</b> berhasil ditambahkan');
		$this->session->set_flashdata('message-success', 'Sosial Media ' . $data['nama_sosial_media'] . ' berhasil ditambahkan');
		redirect('sosialMedia/index');
	}
	// ------------------ END INSERT ------------------

	// ------------------ START UPDATE ------------------
	public function updateSosialMedia($id)
	{
		$data = [
			'nama_sosial_media' => $this->input->post('nama_sosial_media', true),
			'icon_sosial_media' => $this->input->post('icon_sosial_media', true),
			'link_sosial_media' => $this->input->post('link_sosial_media', true)
		];

		$this->db->update('sosial_media', $data, ['id_sosial_media' => $id]);
		$this->lomo->insertLog('Sosial Media <b>' . $data['nama_sosial_media'] . '</b> berhasil diubah');
		$this->session->set_flashdata('message-success', 'Sosial Media ' . $data['nama_sosial_media'] . ' berhasil diubah');
		redirect('sosialMedia/index');
	}
	// ------------------ END UPDATE ------------------

	// ------------------ START DELETE ------------------
	public function deleteSosialMedia($id)
	{
		$this->admo->checkRoleIsAdmin('menghapus sosial media dengan id ' . $id);

		$nama_sosial_media = $this->getSosialMediaById($id)['nama_sosial_media'];
		
		$this->db->delete('sosial_media', ['id_sosial_media' => $id]);
		$this->lomo->insertLog('Sosial Media <b>' . $nama_sosial_media . '</b> berhasil dihapus');
		$this->session->set_flashdata('message-success', 'sosial media ' . $nama_sosial_media . ' berhasil dihapus');
		redirect('sosialMedia/index');
	}
	// ------------------ END DELETE ------------------
}