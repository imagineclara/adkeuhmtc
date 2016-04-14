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
			$this->load->view('DInventaris');
		}
	}
	public function keluar($in_eks='', $tambah='')
	{
		if ($in_eks=='internal') {
			if ($tambah=='tambah') {
				$this->load->view('surat_keluar_internal');
			}
			elseif ($tambah == '') {
				$data['surat_keluar_internal'] = $this->m_surat->getSurat_keluar_internal();
				$this->load->view('daftar_keluar_internal', $data);
			}
		}
		elseif ($in_eks=='eksternal') {
			if ($tambah=='tambah') {
				$this->load->view('surat_keluar_eksternal');
			}
			elseif ($tambah == '') {
				$data['surat_keluar_eksternal'] = $this->m_surat->getSurat_keluar_eksternal();
				$this->load->view('daftar_keluar_eksternal', $data);
			}
		}
	}
	public function submit_surat_masuk()
	{
		//$no = $_POST['no'];
		$tanggal_masuk = $this->input->post(['tanggal_masuk']);
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$no_surat = $_POST['no_surat'];
		$tujuan = $_POST['tujuan'];
		$subjek = $_POST['subjek'];
		$tanggal_acara = $_POST['tanggal_acara'];
		$state = $this->m_surat->insertSurat_masuk($tanggal_masuk, $no_surat, $tujuan, $subjek, $tanggal_acara);
		// $this->
		if ($state) {
			redirect('surat');
		}	
		else {
			redirect('surat');
		}

		// $this->load->view('surat_masuk');
	}
	public function submit_surat_keluar_a()
	{
		//$no = $_POST['no'];
		$tanggal_surat = $_POST['tanggal_surat'];
		$no_surat = $_POST['no_surat'];
		$tujuan = $_POST['tujuan'];
		$subjek = $_POST['subjek'];
		$state = $this->m_surat->insertSurat_keluar_a($tanggal_surat, $no_surat, $tujuan, $subjek);
		// $this->
		if ($state) {
			redirect('surat');
		}	
		else {
			redirect('surat');
		}
		// $this->load->view('surat_masuk');
	}
	public function submit_surat_keluar_b()
	{
		//$no = $_POST['no'];
		$tanggal_surat = $_POST['tanggal_surat'];
		$no_surat = $_POST['no_surat'];
		$tujuan = $_POST['tujuan'];
		$subjek = $_POST['subjek'];
		$state = $this->m_surat->insertSurat_keluar_b($tanggal_surat, $no_surat, $tujuan, $subjek);
		// $this->
		if ($state) {
			redirect('surat');
		}	
		else {
			redirect('surat');
		}
		// $this->load->view('surat_masuk');
	}
}
//mencoba push ke github