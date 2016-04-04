<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat_masuk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->library('upload','form_validation');
		$this->load->model('m_surat');
	}

	public function index()
	{
		// $data['surat_masuk'] = $this->madmin->getSurat_masuk();
		$this->load->view('surat_masuk');
	}

	public function input_surat_masuk()
	{
		//$no = $_POST['no'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$no_surat = $_POST['no_surat'];
		$tujuan = $_POST['tujuan'];
		$subjek = $_POST['subjek'];
		$tanggal_acara = $_POST['tanggal_acara'];
		$this->m_surat->insertSurat_masuk($tanggal_masuk, $no_surat, $tujuan, $subjek, $tanggal_acara);
		// $this->
		redirect('surat_masuk');
		// $this->load->view('surat_masuk');
	}
}
