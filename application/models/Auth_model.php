<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getUserByUsernameOrEmail($keyword)
	{
		$query = "SELECT * FROM user INNER JOIN role ON user.id_role = role.id_role WHERE username = '$keyword' OR email = '$keyword'";
		return $this->db->query($query)->row_array();
	}

	public function getUserByEmail($email)
	{
		return $this->db->get_where('user', ['email' => $email])->row_array();
	}

	public function getUserTokenByToken($token)
	{
		return $this->db->get_where('user_token', ['token' => $token])->row_array();
	}

	public function getUserByEmailAndIsActive($email)
	{
		$query = "SELECT * FROM user WHERE email = '$email' AND is_active = '1'";
		return $this->db->query($query)->row_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START UPDATE ------------------
	public function updateIsActiveByEmail($email)
	{
		$this->db->set('is_active', 1);
		$this->db->where('email', $email);
		return $this->db->update('user');
	}

	public function updatePasswordByEmail($password, $email)
	{
		$this->db->set('password', $password);
		$this->db->where('email', $email);
		return $this->db->update('user');
	}
	// ------------------ END UPDATE ------------------

	// ------------------ START DELETE ------------------
	public function deleteTokenByEmail($email)
	{
		return $this->db->delete('user_token', ['email' => $email]);
	}

	public function deleteUserByEmail($email)
	{
		return $this->db->delete('user', ['email' => $email]);
	}
	// ------------------ END DELETE ------------------

}