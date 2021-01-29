<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model 
{
	// ------------------ START GET ------------------
	public function getPortfolio()
	{
		return $this->db->get('portfolio')->row_array();
	}
	// ------------------ END GET ------------------
}