<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

public function dataKelas()
	{
		$query = $this->db->query('SELECT * FROM kelas_umum');
		return $query->result();
	}

	public function tambahKelas($data)
	{
		$this->db->query('INSERT INTO kelas_umum(ID_BIMBEL,NAMA_KELAS,KUOTA_KELAS,TANGGAL_PELAKSANAAN, STATUS_KELAS, LOKASI_KELAS)VALUES(?,?,?,?,?,?)', array($data['ID_BIMBEL'], $data['NAMA_KELAS'], $data['KUOTA_KELAS'], $data['TANGGAL_PELAKSANAAN'], $data['STATUS_KELAS'], $data['LOKASI_KELAS']));
		unset($data);
	}

	public function editKelas($id)
	{
		$datakelas = $this->db->query('SELECT * FROM kelas_umum where ID_KELAS=?', array($id));
		return $datakelas->row();
		unset($datakelas, $id);
	}

	public function updateKelas($id, $data)
	{
		$this->db->query('UPDATE kelas_umum set ID_BIMBEL=?,NAMA_KELAS=?,KUOTA_KELAS=?,TANGGAL_PELAKSANAAN=?, STATUS_KELAS=?, LOKASI_KELAS=?  where ID_KELAS=?',array($data['ID_BIMBEL'], $data['NAMA_KELAS'], $data['KUOTA_KELAS'], $data['TANGGAL_PELAKSANAAN'], $data['STATUS_KELAS'], $data['LOKASI_KELAS'], $id));
		unset($data, $id);
	}

	public function hapusKelas($id)
	{
		$this->db->query('DELETE FROM kelas_umum where ID_KELAS=?', array($id));
		unset($id);
	}

}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */