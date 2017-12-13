<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'bimbelku';
		$this->load->view('member/main', $data, FALSE);
	}

}

/* End of file Grup.php */
/* Location: ./application/controllers/member/Grup.php */