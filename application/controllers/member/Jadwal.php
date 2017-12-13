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
		$this->load->view('member/main', $data);
	}

}

/* End of file Grup.php */
/* Location: ./application/controllers/admin/Grup.php */