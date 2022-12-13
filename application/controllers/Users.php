<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty($this->session->userdata('login'))) {
			redirect('auth');
		}

		$this->load->model('m_users');
	}

	public function index()
	{
		$data['title'] = "Manajemen Pengguna";

		$data['users'] = $this->m_users->tampil_data()->result_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('users/v_data', $data);
		$this->load->view('v_footer');
	}
	
	public function tambah() {
		$data['title'] = "Tambah User";

		$this->load->view('v_header', $data);
		$this->load->view('users/v_tambah', $data);
		$this->load->view('v_footer');
	}

	public function insert() {
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$password = md5($this->input->post('password'));

		$data = [
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'password' => $password,
		];

		$this->m_users->insert_data($data);

		redirect('users');
	}

	public function edit($id) {
		$data['title'] = "Edit User";

		$where = ['id' => $id];
		$data['user'] = $this->m_users->edit_data($where)->row_array();
		
		$this->load->view('v_header', $data);
		$this->load->view('users/v_edit', $data);
		$this->load->view('v_footer');
	}
	
	public function update() {
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$password = md5($this->input->post('password'));

		$data = [
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'password' => $password,
		];

		$where = ['id' => $id];
		$this->m_users->update_data($data, $where);

		redirect('users');
	}

	public function hapus($id) {
		$where = ['id' => $id];
		$this->m_users->hapus_data($where);
		
		redirect('users');
	}
}
