<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grup extends CI_Model {

public function __construct()
{
	parent::__construct();
}

public function dataGrup()
{
	$this->db->select('*');
	$this->db->from('grup_bimbel');
	$this->db->join('users', 'users.id_user = grup_bimbel.id_user', 'left');
	$dataGrup = $this->db->get();

	if ($dataGrup->num_rows()>0) {
		return $dataGrup->result();
	}else{
		return array();
	}
}

public function tambahBimbel($data)
{
	$query = $this->db->query('INSERT INTO grup_bimbel(ID_USER, NAMA_BIMBEL,ALAMAT_BIMBEL,TELEPON_BIMBEL,EMAIL_BIMBEL, KONSENTRASI_BIMBEL, STATUS_BIMBEL,RATING_BIMBEL)VALUES(?,?,?,?,?,?,?,?)', array($data['ID_USER'], $data['NAMA_BIMBEL'], $data['ALAMAT_BIMBEL'], $data['TELEPON_BIMBEL'], $data['EMAIL_BIMBEL'], $data['KONSENTRASI_BIMBEL'], $data['STATUS_BIMBEL'], $data['RATING_BIMBEL']));
	return $query;
	unset($query, $data);
}

public function editBimbel($id)
{
	$query = $this->db->query('SELECT * FROM grup_bimbel where ID_BIMBEL=?', array($id));
	return $query->row();
	unset($query, $id);
}

public function detailBimbel($id)
{
	$query = $this->db->query("SELECT * from grup_bimbel left join users on users.ID_USER=grup_bimbel.ID_USER");
	return $query->row();
	unset($query, $id);
}

public function updateBimbel($id, $data)
{
	$query = $this->db->query('UPDATE grup_bimbel set ID_USER=?, NAMA_BIMBEL=?, ALAMAT_BIMBEL=?, TELEPON_BIMBEL=?,EMAIL_BIMBEL=?, KONSENTRASI_BIMBEL=? where ID_BIMBEL=?', array($data['ID_USER'], $data['NAMA_BIMBEL'], $data['ALAMAT_BIMBEL'], $data['TELEPON_BIMBEL'], $data['EMAIL_BIMBEL'], $data['KONSENTRASI_BIMBEL'],$id));
	return $query;
	unset($data, $id, $query);
}

public function hapusBimbel($id)
{
	$query = $this->db->query('DELETE FROM grup_bimbel where ID_BIMBEL=?', array($id));
	return $query;
	unset($query, $id);
}

public function cariBimbel($data) {
    $query =  $this->db->query("SELECT * from grup_bimbel where NAMA_BIMBEL like ? or ALAMAT_BIMBEL like ? or TELEPON_BIMBEL like ? order by ID_BIMBEL asc ", array('%'.$data.'%', '%'.$data.'%', '%'.$data.'%'));
 		return $query->result();
 		$query= null;
    }
	

}

/* End of file M_grup.php */
/* Location: ./application/models/M_grup.php */