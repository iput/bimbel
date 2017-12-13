<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'kritik';
		$this->load->view('admin/main', $data);
	}

}

/* End of file Kritik.php */
/* Location: ./application/controllers/admin/Kritik.php */