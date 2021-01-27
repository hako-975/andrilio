<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getGaleri()
	{
		return $this->db->get('galeri')->result_array();
	}
	// ------------------ END GET ------------------
}