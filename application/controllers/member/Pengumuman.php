<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] ='pengumuman';
		$this->load->view('member/main', $data);
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/admin/Pengumuman.php */