<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_obat');
	}

	public function index()
	{
		$data['title'] = "Manajemen Obat";

		$data['obat'] = $this->m_obat->tampil_data()->result_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('obat/v_data', $data);
		$this->load->view('v_footer');
	}
	
	public function tambah() {
		$data['title'] = "Tambah Obat";

		$this->load->view('v_header', $data);
		$this->load->view('obat/v_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert() {
		$nama_obat = $this->input->post('nama_obat');

		$data = [
			'nama_obat' => $nama_obat,
		];

		$this->m_obat->insert_data($data);

		redirect('obat');
	}

	public function edit($id) {
		$data['title'] = "Edit Obat";

		$where = ['id_obat' => $id];
		$data['obat'] = $this->m_obat->edit_data($where)->row_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('obat/v_edit', $data);
		$this->load->view('v_footer');
	}
	
	public function update() {
		$id = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');

		$data = [
			'nama_obat' => $nama_obat,
		];

		$where = ['id_obat' => $id];
		$this->m_obat->update_data($data, $where);

		redirect('obat');
	}

	public function hapus($id) {
		$where = ['id_obat' => $id];
		$this->m_obat->hapus_data($where);
		
		redirect('obat');
	}
}
