<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_keluar_a extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->library('upload','form_validation');
		$this->load->model('m_surat');
	}

	public function index()
	{
		$this->load->view('surat_keluar_a');
	}
	public function input_surat_keluar_a()
	{
		//$no = $_POST['no'];
		$tanggal_surat = $_POST['tanggal_surat'];
		$no_surat = $_POST['no_surat'];
		$tujuan = $_POST['tujuan'];
		$subjek = $_POST['subjek'];
		$this->m_surat->insertSurat_keluar_a($tanggal_surat, $no_surat, $tujuan, $subjek);
		// $this->
		redirect('surat_keluar_a');
		// $this->load->view('surat_masuk');
	}
}
