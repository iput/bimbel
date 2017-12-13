<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

public function dataPengumuman()
	{
		$query = $this->db->query('SELECT * from pengumuman ');
		return $query->result();
		unset($query);
	}

	public function tambahPengumuman($data)
	{
		$this->db->query('INSERT INTO pengumuman(JUDUL_PENGUMUMAN, KONTEN_PENGUMUMAN, TEMPAT_PELAKSANAAN,TANGGAL_PENGUMUMAN, STATUS_PENGUMUMAN, NAMA_PEMBUAT, EMAIL_PEMBUAT) VALUES (?,?,?,?,?,?,?)', array($data['JUDUL_PENGUMUMAN'], $data['KONTEN_PENGUMUMAN'], $data['TEMPAT_PELAKSANAAN'], $data['TANGGAL_PENGUMUMAN'], $data['STATUS_PENGUMUMAN'],$data['NAMA_PEMBUAT'], $data['EMAIL_PEMBUAT']));
		unset($data);
	}

	public function editPengumuman($id)
	{
		$query = $this->db->query('SELECT * FROM pengumuman where ID_PENGUMUMAN = ?', array($id));
		return $query->row();
		unset($query, $id);
	}

	public function updatePengumuman($id, $data)
	{
		$this->db->query('UPDATE pengumuman SET JUDUL_PENGUMUMAN=?, KONTEN_PENGUMUMAN=?, TEMPAT_PELAKSANAAN=?,TANGGAL_PENGUMUMAN=?, STATUS_PENGUMUMAN=?, NAMA_PEMBUAT=?, EMAIL_PEMBUAT=? where ID_PENGUMUMAN=? ', array($data['JUDUL_PENGUMUMAN'], $data['KONTEN_PENGUMUMAN'], $data['TEMPAT_PELAKSANAAN'], $data['TANGGAL_PENGUMUMAN'], $data['STATUS_PENGUMUMAN'],$data['NAMA_PEMBUAT'], $data['EMAIL_PEMBUAT'], $id));
		unset($id, $data);
	}

	public function hapusPengumuman($id)
	{
		$this->db->query('DELETE FROM pengumuman where ID_PENGUMUMAN=?', array($id));
		unset($id);
	}

}

/* End of file M_pengumuman.php */
/* Location: ./application/models/M_pengumuman.php */