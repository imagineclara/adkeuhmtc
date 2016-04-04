<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_keluar_a extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('');
		$this->load->library('upload','form_validation');
		$this->load->model('m_surat');
	}

	public function index()
	{
		$this->load->view('daftar_keluar_a');
	}
}
