<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Controller {
	
	public function list()
	{
		return $this->db->get('peserta')->result();
	}

	public function insert($params = [])
	{
		return $this->db->insert('peserta', $params);
	}
}
