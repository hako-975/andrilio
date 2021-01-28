<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getPesan()
	{
		return $this->db->get('pesan')->result_array();
	}
	// ------------------ END GET ------------------
}