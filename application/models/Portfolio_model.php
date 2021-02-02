<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getPortfolio()
	{
		return $this->db->get('portfolio')->row_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START UPDATE ------------------
	public function updateTitleAndImgFavicon()
	{
		$id = $this->getPortfolio()['id_portfolio'];
		$old_favicon = $this->getPortfolio()['img_favicon'];

		$img_favicon = $_FILES['img_favicon']['name'];
		if ($img_favicon) {
			$config['upload_path'] 	 = realpath(FCPATH . '/assets/img/img_favicon/');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] 	 = '20480';

			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('img_favicon')) {
				if ($old_favicon != 'default.png') {
					unlink(FCPATH . 'assets/img/img_favicon/' . $old_favicon);
				}
				$new_img_favicon = $this->upload->data('file_name');
				$this->db->set('img_favicon', $new_img_favicon);
			} else {
				echo $this->upload->display_errors();
			}
		}

		$data = [
			'title' => $this->input->post('title', true)
		];

		$this->db->update('portfolio', $data, ['id_portfolio' => $id]);
		
		if ($img_favicon) {
			$this->lomo->insertLog('berhasil mengubah title <b>' . $data['title'] . '</b> dan mengubah favicon <b>' . $new_img_favicon . '</b>');
		} else {
			$this->lomo->insertLog('berhasil mengubah title <b>' . $data['title'] . '</b>');
		}

		$this->session->set_flashdata('message-success', 'berhasil mengubah title ' . $data['title'] . ' dan mengubah favicon ' . $new_img_favicon);
		redirect('portfolio/index');
	}

	public function updateImgNavbarBrand()
	{
		$id = $this->getPortfolio()['id_portfolio'];
		$old_navbar_brand = $this->getPortfolio()['img_navbar_brand'];

		$img_navbar_brand = $_FILES['img_navbar_brand']['name'];
		if ($img_navbar_brand) {
			$config['upload_path'] 	 = realpath(FCPATH . '/assets/img/img_navbar_brand/');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] 	 = '20480';

			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('img_navbar_brand')) {
				if ($old_navbar_brand != 'default.png') {
					unlink(FCPATH . 'assets/img/img_navbar_brand/' . $old_navbar_brand);
				}
				$new_img_navbar_brand = $this->upload->data('file_name');
				$this->db->set('img_navbar_brand', $new_img_navbar_brand);
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->db->set('img_navbar_brand', $old_navbar_brand);
		}

		$this->db->where('id_portfolio', $id);
		$this->db->update('portfolio');
		$this->lomo->insertLog('berhasil mengubah navbar brand <b>' . $new_img_navbar_brand . '</b>');
		$this->session->set_flashdata('message-success', 'Navbar brand berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateImgProfile()
	{
		$id = $this->getPortfolio()['id_portfolio'];
		$old_profile = $this->getPortfolio()['img_profile'];

		$img_profile = $_FILES['img_profile']['name'];
		if ($img_profile) {
			$config['upload_path'] 	 = realpath(FCPATH . '/assets/img/img_profil/');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] 	 = '20480';

			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('img_profile')) {
				if ($old_profile != 'default.png') {
					unlink(FCPATH . 'assets/img/img_profil/' . $old_profile);
				}
				$new_img_profile = $this->upload->data('file_name');
				$this->db->set('img_profile', $new_img_profile);
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->db->set('img_profile', $old_profile);
		}

		$this->db->where('id_portfolio', $id);
		$this->db->update('portfolio');
		$this->lomo->insertLog('berhasil mengubah foto profil <b>' . $new_img_profile . '</b>');
		$this->session->set_flashdata('message-success', 'foto profil berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateImgJumbotron()
	{
		$id = $this->getPortfolio()['id_portfolio'];
		$old_jumbotron = $this->getPortfolio()['img_jumbotron'];

		$img_jumbotron = $_FILES['img_jumbotron']['name'];
		if ($img_jumbotron) {
			$config['upload_path'] 	 = realpath(FCPATH . '/assets/img/img_jumbotron/');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] 	 = '20480';

			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('img_jumbotron')) {
				if ($old_jumbotron != 'default.png') {
					unlink(FCPATH . 'assets/img/img_jumbotron/' . $old_jumbotron);
				}
				$new_img_jumbotron = $this->upload->data('file_name');
				$this->db->set('img_jumbotron', $new_img_jumbotron);
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->db->set('img_jumbotron', $old_jumbotron);
		}

		$this->db->where('id_portfolio', $id);
		$this->db->update('portfolio');
		$this->lomo->insertLog('berhasil mengubah background jumbotron <b>' . $new_img_jumbotron . '</b>');
		$this->session->set_flashdata('message-success', 'background jumbotron berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateHeading1()
	{
		$id = $this->getPortfolio()['id_portfolio'];

		$data = [
			'heading_1' => $this->input->post('heading_1', true)
		];

		$this->db->update('portfolio', $data, ['id_portfolio' => $id]);
		$this->lomo->insertLog('berhasil mengubah heading 1 <b>' . $data['heading_1'] . '</b>');
		$this->session->set_flashdata('message-success', 'heading 1 berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateHeading2()
	{
		$id = $this->getPortfolio()['id_portfolio'];

		$data = [
			'heading_2' => $this->input->post('heading_2', true)
		];

		$this->db->update('portfolio', $data, ['id_portfolio' => $id]);
		$this->lomo->insertLog('berhasil mengubah heading 2 <b>' . $data['heading_2'] . '</b>');
		$this->session->set_flashdata('message-success', 'heading 2 berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateGaleri()
	{
		$data = [
			'kolom_galeri' => $this->input->post('kolom_galeri', true)
		];

		$this->db->update('galeri', $data);
		$this->lomo->insertLog('berhasil mengubah Tata Letak Galeri <b>' . $data['kolom_galeri'] . '</b>');
		$this->session->set_flashdata('message-success', 'Tata Letak Galeri berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateKontak()
	{
		$this->load->model('Kontak_model', 'komo');
		$id = $this->komo->getKontak()['id_kontak'];

		$data = [
			'judul_kontak' => $this->input->post('judul_kontak', true),
			'no_telepon_kontak' => $this->input->post('no_telepon_kontak', true),
			'alamat_kontak' => $this->input->post('alamat_kontak', true)
		];

		$kontak = implode(', ', $data);

		$this->db->update('kontak', $data, ['id_kontak' => $id]);
		$this->lomo->insertLog('berhasil mengubah kontak <b>' . $kontak . '</b>');
		$this->session->set_flashdata('message-success', 'kontak berhasil diubah');
		redirect('portfolio/index');
	}

	public function updateFooter()
	{
		$id = $this->getPortfolio()['id_portfolio'];

		$data = [
			'footer' => $this->input->post('footer', true)
		];

		$this->db->update('portfolio', $data, ['id_portfolio' => $id]);
		$this->lomo->insertLog('berhasil mengubah footer <b>' . $data['footer'] . '</b>');
		$this->session->set_flashdata('message-success', 'footer berhasil diubah');
		redirect('portfolio/index');
	}
	// ------------------ END UPDATE ------------------
}