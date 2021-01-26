<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getDataUser()
	{
		return $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
	}
	// ------------------ END GET ------------------
}