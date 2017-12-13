<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'membership';
		$this->load->view('member/main', $data);
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/admin/Member.php */