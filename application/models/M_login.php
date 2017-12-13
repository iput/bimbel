<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

public function register($data)
	{
		$this->db->query('INSERT INTO users(NAMA_LENGKAP,EMAILUSER, USERNAME,PASSWORD_LOG,GRADE_USER,STATUS_AKTIF,KONFIRMASI)VALUES(?,?,?,?,?,?,?)', array($data['NAMA_LENGKAP'], $data['EMAILUSER'], $data['USERNAME'], $data['PASSWORD_LOG'], $data['GRADE_USER'], $data['STATUS_AKTIF'], $data['KONFIRMASI']));
		unset($data);
	}

	public function cekLogin($username, $password)
	{
		$data = $this->db->query('SELECT * FROM users where ((users.`USERNAME`="'.$username.'") or (users.`EMAILUSER`="'.$username.'")) and users.`PASSWORD_LOG`="'.$password.'"', array($username, $password));
		if ($data) {
			return $data->row();
		}else{
			return false;
		}
		unset($data, $username, $password);
	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */