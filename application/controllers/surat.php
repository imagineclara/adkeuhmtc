<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class surat extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('');
		$this->load->library('upload','form_validation');
		$this->load->model('m_surat');
	}

	public function index()
	{
		$this->load->view('surat_masuk');
		
		// if ($fungsi=='tambah') {
		// 		$this->load->view('surat_masuk');
		// }
		// elseif ($fungsi=='report') {
		// 	# code...
		// }
		
		
		// $data['surat_keluar_a'] = $this->m_surat->getSurat_keluar_a();
		// $this->load->view('daftar_keluar_a', $data);
	}
	public function keluar($fungsi='')
	{
		if ($fungsi=='tambah') {
				# code...
		}
		elseif ($fungsi=='internal') {
			# code...
		}
		elseif ($fungsi=='eksternal') {
			# code...
		}
		
		$data['surat_keluar_a'] = $this->m_surat->getSurat_keluar_a();
		$this->load->view('daftar_keluar_a', $data);
	}
}
