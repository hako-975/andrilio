<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Portfolio_model', 'pomo');
		$this->load->model('Section_model', 'semo');
		$this->load->model('SosialMedia_model', 'somemo');
		$this->load->model('Galeri_model', 'gamo');
		$this->load->model('Kontak_model', 'komo');
	}

	public function index()
	{
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['title'] 			= $data['portfolio']['title'];

		$data['section'] 		= $this->semo->getSection();
		$data['sosial_media'] 	= $this->somemo->getSosialMedia();
		$data['galeri'] 		= $this->gamo->getGaleri();
		$data['kontak'] 		= $this->komo->getKontak();
		
		$this->load->view('templates/landing/header-landing', $data);
		$this->load->view('landing/index', $data);
		$this->load->view('templates/landing/footer-landing', $data);
	}

	public function sendMessage()
	{
		$data['portfolio'] 		= $this->pomo->getPortfolio();
		$data['title'] 			= $data['portfolio']['title'];

		$data['section'] 		= $this->semo->getSection();
		$data['sosial_media'] 	= $this->somemo->getSosialMedia();
		$data['galeri'] 		= $this->gamo->getGaleri();
		$data['kontak'] 		= $this->komo->getKontak();
	
		$this->form_validation->set_rules('nama_pengirim', 'Nama Pengirim', 'required|trim');	
		$this->form_validation->set_rules('email_pengirim', 'Email Pengirim', 'required|trim|valid_email');	
		$this->form_validation->set_rules('wa_pengirim', 'WhatsApp Pengirim', 'required|trim|numeric');	
		$this->form_validation->set_rules('pesan_pengirim', 'Pesan Pengirim', 'required|trim');	
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/landing/header-landing', $data);
			$this->load->view('landing/index', $data);
			$this->load->view('templates/landing/footer-landing', $data);
		} else {

			$nama_pengirim = $this->input->post('nama_pengirim', true);
			$email_pengirim = $this->input->post('email_pengirim', true);
			$wa_pengirim = $this->input->post('wa_pengirim', true);
			$pesan_pengirim = $this->input->post('pesan_pengirim', true);
			
			$data = [
				'nama_pengirim' => $nama_pengirim,
				'email_pengirim' => $email_pengirim,
				'wa_pengirim' => $wa_pengirim,
				'pesan_pengirim' => $pesan_pengirim
			];
			
			$this->db->insert('pengirim', $data);

			$config = [
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'andrilio9999@gmail.com',
				'smtp_pass' => 'Andrilio123',
				'smtp_port' => 465,
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'newline'   => "\r\n"
			];

			$this->load->library('email', $config);
			$this->email->initialize($config);

			$this->email->from($email_pengirim, $nama_pengirim);
			$this->email->to('andrilio9999@gmail.com');

			$this->email->subject($email_pengirim . ' | ' . $wa_pengirim);
			$this->email->message($pesan_pengirim);
		
			if ($this->email->send()) {
				$this->session->set_flashdata('message-success', 'Pesan Anda berhasil terkirim! Terimakasih!! :D');
				redirect('landing');
			} else {
				$this->session->set_flashdata('message-failed', 'Pesan Anda gagal terkirim, Silahkan coba lagi!');
				redirect('landing');
				echo $this->email->print_debugger();
				die;
			}
		}
	}
}
