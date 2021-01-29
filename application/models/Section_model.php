<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getSection()
	{
		return $this->db->get('section')->result_array();
	}

	public function getSectionById($id)
	{
		return $this->db->get_where('section', ['id_section' => $id])->row_array();
	}
	// ------------------ END GET ------------------
	
	// ------------------ START INSERT ------------------
	public function insertSection()
	{
		$data = [
			'nama_section' => $this->input->post('nama_section', true),
			'konten_section' => $this->input->post('konten_section')
		];

		$this->db->insert('section', $data);
		$this->session->set_flashdata('message-success', 'Section ' . $data['nama_section'] . ' berhasil ditambahkan');
		redirect('section/index');
	}
	// ------------------ END INSERT ------------------

	// ------------------ START UPDATE ------------------
	public function updateSection($id)
	{
		$data = [
			'nama_section' => $this->input->post('nama_section', true),
			'konten_section' => $this->input->post('konten_section')
		];

		$this->db->update('section', $data, ['id_section' => $id]);
		$this->session->set_flashdata('message-success', 'Section ' . $data['nama_section'] . ' berhasil diubah');
		redirect('section/index');
	}
	// ------------------ END UPDATE ------------------

	// ------------------ START DELETE ------------------
	public function deleteSection($id)
	{
		$nama_section = $this->getSectionById($id)['nama_section'];
		
		$this->db->delete('section', ['id_section' => $id]);
		$this->session->set_flashdata('message-success', 'Section ' . $nama_section . ' berhasil dihapus');
		redirect('section/index');
	}
	// ------------------ END DELETE ------------------

}
