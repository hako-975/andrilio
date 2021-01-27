<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SosialMedia_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getSosialMedia()
	{
		return $this->db->get('sosial_media')->result_array();
	}
	// ------------------ END GET ------------------
}