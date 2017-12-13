<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

	public function dataPengajar()
	{
		$query = $this->db->query('SELECT * FROM users where GRADE_USER = "pengajar" ');
		return $query->result();
	}

	public function dataUsers()
	{
		$query = $this->db->query("SELECT * FROM users");
		return $query->result();
		unset($query);
	}

	public function tambahMember($data)
	{
		$this->db->query("INSERT INTO users(NAMA_LENGKAP, ALAMAT, TELEPON, EMAILUSER, USERNAME, PASSWORD_LOG,GRADE_USER, STATUS_AKTIF, KONFIRMASI)  VALUES(?,?,?,?,?,?,?,?,?)", array($data['NAMA_LENGKAP'], $data['ALAMAT'], $data['TELEPON'], $data['EMAILUSER'], $data['USERNAME'], $data['PASSWORD_LOG'], $data['GRADE_USER'], $data['STATUS_AKTIF'], $data['KONFIRMASI']));
		unset($data, $query);
	}

	public function editMember($id)
	{
		$query = $this->db->query('SELECT * from users where ID_USER=?', array($id));
		return $query->row();
		unset($query, $id);
	}

	public function updateMember($id, $data)
	{
		$this->db->query('UPDATE users set NAMA_LENGKAP=?, ALAMAT=?, TELEPON=?, EMAILUSER=?, USERNAME=?, PASSWORD_LOG=?,GRADE_USER=?, STATUS_AKTIF=?, KONFIRMASI=? where ID_USER=?',array($data['NAMA_LENGKAP'], $data['ALAMAT'], $data['TELEPON'], $data['EMAILUSER'], $data['USERNAME'], $data['PASSWORD_LOG'], $data['GRADE_USER'], $data['STATUS_AKTIF'], $data['KONFIRMASI'], $id));
		unset($id, $data);
	}

	public function hapusMember($id)
	{
		$this->db->query('DELETE from users where ID_USER=?', array($id));
		unset($id);
	}
	

}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */