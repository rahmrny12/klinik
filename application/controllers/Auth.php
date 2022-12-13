<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function login_aksi()
	{
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {
			$data = [
				'username' => $user,
				'password' => $pass,
			];

			$cek_login = $this->m_login->login($data)->num_rows();

			if ($cek_login > 0) {
				$user = [
					'login' => true,
					'username' => $user,
				];

				$this->session->set_userdata($user);

				redirect(base_url('dashboard'));
			} else {
				redirect(base_url('auth'));
			}
		} else {
			$this->load->view('v_login');
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('auth');
	}
}
