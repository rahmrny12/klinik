<?php 

class M_login extends CI_Model {
	public function login($data) {
		return $this->db->get_where('users', $data);
	}
}