<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getKontak()
	{
		return $this->db->get('kontak')->row_array();
	}
	// ------------------ END GET ------------------
}