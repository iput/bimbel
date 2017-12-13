<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'jadwal';
		$this->load->view('pengajar/home', $data, FALSE);
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/pengajar/Jadwal.php */