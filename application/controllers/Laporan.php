<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_dokter');
		$this->load->model('m_pasien');
		$this->load->model('m_kunjungan');
	}

	public function index()
	{
		$data['title'] = "Laporan Kunjungan";

		$data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();
		
		$this->load->view('v_laporan', $data);
	}
}
