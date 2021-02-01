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
	public function updateTitleAndFavicon()
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

	// ------------------ END UPDATE ------------------
}