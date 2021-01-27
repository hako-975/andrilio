<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getRole()
	{
		return $this->db->get('role')->result_array();
	}
	// ------------------ END GET ------------------

}