<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getLog()
	{
		return $this->db->get('log')->result_array();
	}
	// ------------------ END GET ------------------
}