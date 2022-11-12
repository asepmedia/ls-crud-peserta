<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Peserta_model');
	}

	public function index()
	{
		$params['view'] = 'peserta/index';
		$params['lists'] = $this->Peserta_model->list();
		$this->load->view('layout', $params);
	}

	public function create()
	{
		$params['view'] = 'peserta/create';
		$this->load->view('layout', $params);
	}

	public function doCreate() {
		$params = [
			'nama' 				=> $this->input->post('nama'),
			'catatan' 			=> $this->input->post('catatan'),
			'tanggal_daftar'	=> date('Y-m-d')
		];

		$this->Peserta_model->insert($params);
		return redirect('/peserta');
	}
}
