<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admo');
	}

	// ------------------ START GET ------------------
	public function getLog()
	{
		$this->db->order_by('id_log', 'desc');
		return $this->db->get('log')->result_array();
	}
	// ------------------ END GET ------------------

	// ------------------ START INSERT ------------------
	public function insertLog($isi_log)
	{
		$data = [
			'isi_log' 	=> $isi_log,
			'date_log' 	=> time(),
			'id_user' 	=> $this->admo->getDataUser()['id_user']
		];

		return $this->db->insert('log', $data);
	}
	// ------------------ END INSERT ------------------
}