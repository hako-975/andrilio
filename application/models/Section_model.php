<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getSection()
	{
		return $this->db->get('section')->result_array();
	}
	// ------------------ END GET ------------------
}