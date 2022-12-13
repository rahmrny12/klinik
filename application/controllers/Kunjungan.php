<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_kunjungan');
		$this->load->model('m_pasien');
		$this->load->model('m_dokter');
		$this->load->model('m_obat');
	}

	public function index()
	{
		$data['title'] = "Manajemen Kunjungan";

		$data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_data', $data);
		$this->load->view('v_footer');
	}

	public function tambah()
	{
		$data['title'] = "Tambah Kunjungan";

		$data['pasien'] = $this->m_pasien->tampil_data()->result_array();
		$data['dokter'] = $this->m_dokter->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert()
	{
		$tgl_berobat = $this->input->post('tgl_berobat');
		$id_pasien = $this->input->post('id_pasien');
		$id_dokter = $this->input->post('id_dokter');

		$data = [
			'tgl_berobat' => $tgl_berobat,
			'id_pasien' => $id_pasien,
			'id_dokter' => $id_dokter,
		];

		$this->m_kunjungan->insert_data($data);

		redirect('kunjungan');
	}

	public function edit($id)
	{
		$data['title'] = "Edit Kunjungan";

		$where = ['id_berobat' => $id];
		$data['kunjungan'] = $this->m_kunjungan->edit_data($where)->row_array();

		$data['pasien'] = $this->m_pasien->tampil_data()->result_array();
		$data['dokter'] = $this->m_dokter->tampil_data()->result_array();

		$this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_edit', $data);
		$this->load->view('v_footer');
	}

	public function update()
	{
		$id = $this->input->post('id_berobat');
		$tgl_berobat = $this->input->post('tgl_berobat');
		$id_pasien = $this->input->post('id_pasien');
		$id_dokter = $this->input->post('id_dokter');

		$data = [
			'tgl_berobat' => $tgl_berobat,
			'id_pasien' => $id_pasien,
			'id_dokter' => $id_dokter,
		];

		$where = ['id_berobat' => $id];
		$this->m_kunjungan->update_data($data, $where);

		redirect('kunjungan');
	}

	public function hapus($id)
	{
		$where = ['id_berobat' => $id];
		$this->m_kunjungan->hapus_data($where);

		redirect('kunjungan');
	}

	public function rekam($id)
	{
		$data['title'] = "Rekam Medis";

		// detail rekam medis
		$data['rekam'] = $this->m_kunjungan->tampil_rekam($id)->row_array();

		// riwayat kunjungan
		$pasien = $this->db->query("SELECT id_pasien FROM berobat WHERE id_berobat='$id'")->row_array();
		$id_pasien = $pasien['id_pasien'];
		$data['riwayat'] = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();

		// data obat
		$data['obat'] = $this->m_obat->tampil_data()->result_array();
		// resep obat
		$data['resep'] = $this->m_kunjungan->tampil_resep($id)->result_array();


		$this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_rekam_medis', $data);
		$this->load->view('v_footer');
	}

	public function insert_rekam()
	{
		$id_berobat = $this->input->post('id_berobat');
		$keluhan = $this->input->post('keluhan');
		$diagnosa = $this->input->post('diagnosa');
		$penatalaksanaan = $this->input->post('penatalaksanaan');

		$data = [
			'keluhan_pasien' => $keluhan,
			'hasil_diagnosa' => $diagnosa,
			'penatalaksanaan' => $penatalaksanaan,
		];

		$where = ['id_berobat' => $id_berobat];
		$this->m_kunjungan->update_data($data, $where);

		redirect('kunjungan/rekam/' . $id_berobat);
	}
	
	public function insert_resep()
	{
		$id_berobat = $this->input->post('id_berobat');
		$id_obat = $this->input->post('id_obat');

		$data = [
			'id_berobat' => $id_berobat,
			'id_obat' => $id_obat,
		];

		$this->m_kunjungan->insert_resep($data);

		redirect('kunjungan/rekam/' . $id_berobat);
	}

	public function hapus_resep($id_resep, $id_berobat) {
		$where = ['id_resep' => $id_resep];
		$this->m_kunjungan->hapus_resep($where);

		redirect('kunjungan/rekam/' . $id_berobat);
	}
	
}
