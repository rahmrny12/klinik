<?php 

class M_users extends CI_Model {
	public function tampil_data() {
		return $this->db->get('users');
	}

	public function insert_data($data) {
		return $this->db->insert('users', $data);
	}

	public function edit_data($where) {
		return $this->db->get_where('users', $where);
	}

	public function update_data($data, $where) {
		return $this->db->update('users', $data, $where);
	}

	public function hapus_data($where) {
		return $this->db->delete('users', $where);
	}
}