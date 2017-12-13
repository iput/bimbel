<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'kelasUmum';
		$this->load->view('member/main', $data);
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/admin/Kelas.php */