<?php 

class M_dokter extends CI_Model {
	public function tampil_data() {
		return $this->db->get('dokter');
	}

	public function insert_data($data) {
		return $this->db->insert('dokter', $data);
	}

	public function edit_data($where) {
		return $this->db->get_where('dokter', $where);
	}

	public function update_data($data, $where) {
		return $this->db->update('dokter', $data, $where);
	}

	public function hapus_data($where) {
		return $this->db->delete('dokter', $where);
	}
}