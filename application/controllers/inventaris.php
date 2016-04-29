<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inventaris extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('upload','form_validation');
		$this->load->model('m_inventaris');
	}

	public function index()
	{
		// $this->masuk('');
		$data['inventaris'] = $this->m_inventaris->getInventaris();
		$this->load->view('DInventaris', $data);
	}

	public function masuk($fungsi)
	{
		if ($fungsi=='') {
			$data['inventaris'] = $this->m_inventaris->getInventaris();
			$this->load->view('DInventaris', $data);
		}
		elseif ($fungsi=='tambah') {
			$this->load->view('input_inventaris');
		}
	}
	public function submit_inventaris()
	{
		//$no = $_POST['no'];
		$nama_barang = $this->input->post(['nama_barang']);
		$jumlah_barang = $_POST['jumlah_barang'];
		$kondisi = $_POST['kondisi'];
		$state = $this->m_inventaris->insertInventaris($nama_barang, $jumlah_barang, $kondisi);
		// $this->
		if ($state) {
			redirect('inventaris');
		}	
		else {
			redirect('inventaris');
		}

		// $this->load->view('surat_masuk');
	}
}