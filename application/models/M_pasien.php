<?php 

class M_pasien extends CI_Model {
	public function tampil_data() {
		return $this->db->get('pasien');
	}

	public function insert_data($data) {
		return $this->db->insert('pasien', $data);
	}

	public function edit_data($where) {
		return $this->db->get_where('pasien', $where);
	}

	public function update_data($data, $where) {
		return $this->db->update('pasien', $data, $where);
	}

	public function hapus_data($where) {
		return $this->db->delete('pasien', $where);
	}
}