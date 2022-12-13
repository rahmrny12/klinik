<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_dokter');
	}

	public function index()
	{
		$data['title'] = "Manajemen Dokter";

		$data['dokter'] = $this->m_dokter->tampil_data()->result_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_data', $data);
		$this->load->view('v_footer');
	}
	
	public function tambah() {
		$data['title'] = "Tambah Dokter";

		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert() {
		$nama_dokter = $this->input->post('nama_dokter');

		$data = [
			'nama_dokter' => $nama_dokter,
		];

		$this->m_dokter->insert_data($data);

		redirect('dokter');
	}

	public function edit($id) {
		$data['title'] = "Edit Dokter";

		$where = ['id_dokter' => $id];
		$data['dokter'] = $this->m_dokter->edit_data($where)->row_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('dokter/v_edit', $data);
		$this->load->view('v_footer');
	}
	
	public function update() {
		$id = $this->input->post('id_dokter');
		$nama_dokter = $this->input->post('nama_dokter');

		$data = [
			'nama_dokter' => $nama_dokter,
		];

		$where = ['id_dokter' => $id];
		$this->m_dokter->update_data($data, $where);

		redirect('dokter');
	}

	public function hapus($id) {
		$where = ['id_dokter' => $id];
		$this->m_dokter->hapus_data($where);
		
		redirect('dokter');
	}
}
