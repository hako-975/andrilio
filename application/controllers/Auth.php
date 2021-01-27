<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model', 'aumo');
	}

	public function checkLogin()
	{
		if ($this->session->userdata('username')) {
			redirect('admin');
		}
	}

	public function index()
	{
		$this->checkLogin();

		$data['title'] = 'Masuk';
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/landing/header-landing', $data);
			$this->load->view('auth/index', $data);
			$this->load->view('templates/landing/footer-landing', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username 	= $this->input->post('username', true);
		$password 	= $this->input->post('password', true);

		$user 		= $this->aumo->getUserByUsernameOrEmail($username);

		// jika ada user
		if ($user) {
			// jika pengguna is_active
			if ($user['is_active'] == '1') {
				// cek password
				if (password_verify($password, $user['password'])) {
					// store username dan email ke session
					$data_session = [
						'username' => $user['username'],
						'email' => $user['email'],
						'id_role' => $user['id_role']
					];

					$this->session->set_userdata($data_session);

					if(isset($_GET['link'])) {
						redirect($_GET['link']);
					}

					redirect('admin');
				} else {
					$this->session->set_flashdata('message-failed', 'Password yang anda masukkan salah');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message-failed', 'This ' . $username . ' belum di aktivasi');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message-failed', $username . ' belum di registrasi');
			redirect('auth');
		}
	}

	private function _sendEmail($token, $type)
	{
		$email = $this->input->post('email', true);

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

		$this->email->from('andrilio9999@gmail.com', 'Andrilio');
		$this->email->to($email);

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun');
			$this->email->message('Klik link berikut untuk mengaktifkan akun : <a href=" ' . base_url() . 'auth/verify?email=' . $email . '&token=' . urlencode($token) .'"> ✔ Aktifkan</a>');
		} elseif ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('klik link berikut untuk mereset password : <a href=" ' . base_url() . 'auth/resetPassword?email=' . $email . '&token=' . urlencode($token) .'">Reset Password</a>');
		}
		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email 	= $this->input->get('email', true);
		$token 	= $this->input->get('token', true);
		
		$user 	= $this->aumo->getUserByEmail($email);

		if ($user) {
			$user_token = $this->aumo->getUserTokenByToken($token);
			if ($user_token) {
				if (time() - $user_token['date_created'] < (600)) {
					$this->aumo->updateIsActiveByEmail($email);
					
					$this->aumo->deleteTokenByEmail($email);

					$this->session->set_flashdata('message-success', $email .' sudah aktif! Silahkan Masuk');
					redirect('auth');
				} else {
					$this->aumo->deleteUserByEmail($email);
					$this->aumo->deleteTokenByEmail($email);

					$this->session->set_flashdata('message-failed', 'Verifikasi akun gagal! Token sudah kadaluarsa. Silahkan registrasi kembali');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message-failed', 'Verifikasi Akun gagal! Token salah');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message-failed', 'Verifikasi Akun gagal! Email salah');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('id_role');
		if (isset($_SESSION['message-success'])) {
			if ($_SESSION['message-success'] == 'updateProfile') {
				$this->session->set_flashdata('message-success', 'berhasil mengubah profil');
			}
		} else {
			$this->session->set_flashdata('message-success', 'Anda berhasil keluar');
		}
		redirect('auth');
	}

	public function forgotPassword()
	{
		// if after login before
		if ($this->session->userdata('username')) {
			redirect('admin');
		}
		// data
		$data['title'] = 'Lupa Password';
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/landing/header-landing', $data);
			$this->load->view('auth/forgot_password', $data);
			$this->load->view('templates/landing/footer-landing', $data);
		} else {
			$email = $this->input->post('email', true);
			$user = $this->aumo->getUserByEmailAndIsActive($email);

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'date_created' => time()
				];
				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');
				$this->session->set_flashdata('message-success', 'Silahkan cek kotak masuk email anda untuk mereset password');
				redirect('auth/forgotPassword');
			} else {
				$this->session->set_flashdata('message-failed', 'Email belum di verifikasi atau di registrasi');
				redirect('auth/forgotPassword');
			}
		}
	}

	public function resetPassword()
	{
		$email 	= $this->input->get('email', true);
		$token 	= $this->input->get('token', true);
		
		$user 	= $this->aumo->getUserByEmail($email);

		if ($user) {
			$user_token = $this->aumo->getUserTokenByToken($token);
			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->changePassword();
			} else {
				$this->session->set_flashdata('message-failed', 'Reset password gagal! Token salah');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message-failed', 'Reset password gagal! Email salah');
			redirect('auth');
		}
	}
	
	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('auth');
		}
		// data
		$data['title'] = 'Ganti Password';

		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password_verify]', [
			'matches' => 'Password tidak sama dengan password verifikasi',
			'min_length' => 'Password terlalu pendek'
		]);
		$this->form_validation->set_rules('password_verify', 'Password Verify', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/landing/header-landing', $data);
			$this->load->view('auth/change_password', $data);
			$this->load->view('templates/landing/footer-landing', $data);
			$this->load->view('templates/show_hide_password_registration', $data);	
		} else {
			$password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->aumo->updatePasswordByEmail($password, $email);
			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata('message-success', 'Password berhasil diganti! Silahkan masuk');
			redirect('auth');
		}
	}
}
