<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grup','mdlGrup');
	}

	public function index()
	{
		if (!empty($this->input->post('txtCari'))) {
			$keyword = $this->input->post('txtCari');
			$data['databimbel'] = $this->mdlGrup->cariBimbel($keyword);
		}else{
			$data['databimbel'] = $this->mdlGrup->dataGrup();
		}
		$data['page'] ='bimbingan';

		$this->load->view('pengajar/home', $data, FALSE);
	}

	public function detail()
	{
		$idbimbel = $this->input->get('bimbelku');
		$data['page'] = 'detailBimbel';
		$data['bimbelku'] =$this->mdlGrup->detailBimbel($idbimbel);
		$this->load->view('pengajar/home', $data, FALSE);

	}

}

/* End of file Bimbingan.php */
/* Location: ./application/controllers/pengajar/Bimbingan.php */