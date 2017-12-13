<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login','mdlLogin');
	}

	public function filter($data)
 	{
 		$data = preg_replace('/[^a-zA-Z0-9@.]/', '', $data);
 		return $data;
 		unset($data);
 	}

	public function index()
	{
		$this->load->view('vlogin');		
	}

	public function register()
	{
		$data['NAMA_LENGKAP'] = $this->input->post('Fullname');
		$data['EMAILUSER'] = $this->input->post('email');
		$data['USERNAME'] = $this->input->post('username');
		$data['PASSWORD_LOG']  = sha1($this->input->post('password'));
		$data['GRADE_USER'] = $this->input->post('levelUser');
		$data['STATUS_AKTIF'] ='aktif';
		$data['KONFIRMASI'] = '0';
		$this->mdlLogin->register($data);
		$this->session->set_flashdata('sukses', 'Data anda berhasil diverifikasi, silahkan login untuk menikmati layanan Portal kami');
		redirect('login','refresh');
	}

	public function cekLogin()
	{
		$username = $this->input->post('username');
		$username = $this->filter($username);

		$password = sha1($this->input->post('password'));
		$password = $this->filter($password);

		$logData = $this->mdlLogin->cekLogin($username, $password);
		$result = count($logData);
		if ($result>0) {
			$dataUser = array(
				'username' => $logData->USERNAME,
				'password' =>$logData->PASSWORD_LOG,
				''
			);
			
			$this->session->set_userdata( $array );
		}


	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */