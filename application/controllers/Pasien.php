<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_pasien');
	}

	public function index()
	{
		$data['title'] = "Manajemen Pasien";

		$data['pasien'] = $this->m_pasien->tampil_data()->result_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_data', $data);
		$this->load->view('v_footer');
	}
	
	public function tambah() {
		$data['title'] = "Tambah Pasien";

		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert() {
		$nama_pasien = $this->input->post('nama_pasien');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');

		$data = [
			'nama_pasien' => $nama_pasien,
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
		];

		$this->m_pasien->insert_data($data);

		redirect('pasien');
	}

	public function edit($id) {
		$data['title'] = "Edit Pasien";

		$where = ['id_pasien' => $id];
		$data['pasien'] = $this->m_pasien->edit_data($where)->row_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('pasien/v_edit', $data);
		$this->load->view('v_footer');
	}
	
	public function update() {
		$id = $this->input->post('id_pasien');
		$nama_pasien = $this->input->post('nama_pasien');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');

		$data = [
			'nama_pasien' => $nama_pasien,
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
		];

		$where = ['id_pasien' => $id];
		$this->m_pasien->update_data($data, $where);

		redirect('pasien');
	}

	public function hapus($id) {
		$where = ['id_pasien' => $id];
		$this->m_pasien->hapus_data($where);
		
		redirect('pasien');
	}
}
