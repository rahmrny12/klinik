<?php

class M_kunjungan extends CI_Model
{
	public function tampil_data()
	{
		// return $this->db->get('berobat');

		return $this->db->query("SELECT berobat.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, dokter.nama_dokter
															FROM berobat
															INNER JOIN pasien ON berobat.id_pasien=pasien.id_pasien
															INNER JOIN dokter ON berobat.id_dokter=dokter.id_dokter");
	}

	public function insert_data($data)
	{
		return $this->db->insert('berobat', $data);
	}

	public function edit_data($where)
	{
		return $this->db->get_where('berobat', $where);
	}

	public function update_data($data, $where)
	{
		return $this->db->update('berobat', $data, $where);
	}

	public function hapus_data($where)
	{
		return $this->db->delete('berobat', $where);
	}

	public function tampil_rekam($id)
	{
		return $this->db->query("SELECT berobat.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, dokter.nama_dokter
															FROM berobat
															INNER JOIN pasien ON berobat.id_pasien=pasien.id_pasien
															INNER JOIN dokter ON berobat.id_dokter=dokter.id_dokter
															WHERE id_berobat='$id'
															");
	}

	public function tampil_riwayat($id_pasien)
	{
		return $this->db->query("SELECT berobat.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, dokter.nama_dokter
															FROM berobat
															INNER JOIN pasien ON berobat.id_pasien=pasien.id_pasien
															INNER JOIN dokter ON berobat.id_dokter=dokter.id_dokter
															WHERE berobat.id_pasien='$id_pasien'
															");
	}

	public function tampil_resep($id)
	{
		return $this->db->query("SELECT resep_obat.*, obat.nama_obat
															FROM resep_obat
															INNER JOIN obat ON resep_obat.id_obat=obat.id_obat
															WHERE resep_obat.id_berobat='$id'
															");
	}

	public function insert_resep($data)
	{
		return $this->db->insert('resep_obat', $data);
	}

	public function hapus_resep($where)
	{
		return $this->db->delete('resep_obat', $where);
	}
}
