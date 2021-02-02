<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model', 'lomo');
		$this->load->model('Admin_model', 'admo');
	}

	// ------------------ START GET ------------------
	public function getGaleri()
	{
		return $this->db->get('galeri')->result_array();
	}

	public function getGaleriById($id)
	{
		return $this->db->get_where('galeri', ['id_galeri' => $id])->row_array();
	}
	// ------------------ END GET ------------------
	
	// ------------------ START INSERT ------------------
	private function _set_upload_options(){
		$config = [];
		$config['upload_path'] 		= realpath(FCPATH . '/assets/img/img_galeri/'); 
		$config['remove_spaces']	= TRUE;
		$config['encrypt_name'] 	= TRUE; 
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
		$config['max_size'] 		= '20480';
		$config['overwrite'] 		= FALSE;
		return $config;
	}

	public function insertGaleri()
	{
		$this->load->library('upload');
		$image = [];
		$dataInfo = [];
		$files = $_FILES;
		$cpt = count($_FILES['img_galeri']['name']);
		$error= [];
		for($i=0; $i < $cpt; $i++)
		{
	    	$_FILES['img_galeri']['name']		= $files['img_galeri']['name'][$i];
		    $_FILES['img_galeri']['type']		= $files['img_galeri']['type'][$i];
		    $_FILES['img_galeri']['tmp_name']	= $files['img_galeri']['tmp_name'][$i];
		    $_FILES['img_galeri']['error']		= $files['img_galeri']['error'][$i];
		    $_FILES['img_galeri']['size']		= $files['img_galeri']['size'][$i];

		    $this->upload->initialize($this->_set_upload_options());
		    $this->upload->do_upload('img_galeri');
		    $dataInfo[] = $this->upload->data();

		    $image[] = [
				'img_galeri' => $dataInfo[$i]['file_name']
            ];


		    if (!$this->upload->do_upload('img_galeri'))
		    {
				$error[] = $this->upload->display_errors();
		    }
		}
		//outside for loop

		if (!empty($uploaded)) {
			echo explode('<br>',$error);
		} else {
			$this->db->insert_batch('galeri', $image);
			$this->lomo->insertLog('berhasil menambahkan foto <b>' . $image . '</b>');
			$this->session->set_flashdata('message-success', 'Foto berhasil ditambahkan');
			redirect('galeri/index');
		}
	}
	// ------------------ END INSERT ------------------
	
	// ------------------ START UPDATE ------------------
	public function updateGaleri($id)
	{
		$dg = $this->getGaleriById($id);

		$img_galeri = $_FILES['img_galeri']['name'];
		if ($img_galeri) {
			$config['upload_path'] 	 = realpath(FCPATH . '/assets/img/img_galeri/');
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] 	 = '20480';

			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('img_galeri')) {
				if ($old_galeri != 'default.png') {
					unlink(FCPATH . 'assets/img/img_galeri/' . $dg['img_galeri']);
				}
				$new_img_galeri = $this->upload->data('file_name');
				$this->db->set('img_galeri', $new_img_galeri);
			} else {
				echo $this->upload->display_errors();
			}
		} else {
			$this->db->set('img_galeri', $old_galeri);
		}
		
		$this->db->where('id_galeri', $id);
		$this->db->update('galeri');
		$this->lomo->insertLog('berhasil mengubah foto <b>' . $new_img_galeri . '</b>');
		$this->session->set_flashdata('message-success', 'Foto berhasil diubah');
		redirect('galeri/index');
	}
	// ------------------ END UPDATE ------------------
	
	// ------------------ START DELETE ------------------
	public function deleteGaleri($id)
	{
		$this->admo->checkRoleIsAdmin('menghapus galeri dengan id ' . $id);
		
		$dataGaleri = $this->getGaleriById($id);
		$foto_lama = $dataGaleri['img_galeri'];
		if ($foto_lama != 'default.png') {
			unlink(FCPATH . 'assets/img/img_galeri/' . $dataGaleri['img_galeri']);
		}
		$this->db->delete('galeri', ['id_galeri' => $id]);
		$this->lomo->insertLog('berhasil menghapus foto <b>' . $foto_lama . '</b>');
		$this->session->set_flashdata('message-success', 'Foto berhasil dihapus');
		redirect('galeri/index');
	}	
	// ------------------ END DELETE ------------------
}
