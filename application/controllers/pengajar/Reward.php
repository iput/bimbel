<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['page'] = 'penghargaan';
		$this->load->view('pengajar/home', $data, FALSE);
	}

}

/* End of file Reward.php */
/* Location: ./application/controllers/pengajar/Reward.php */