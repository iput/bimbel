<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users','mdlUser');
	}

	public function index()
	{
		$data['dataMember'] = $this->mdlUser->dataUsers();
		$data['page'] = 'membership';
		$this->load->view('admin/main', $data);
	}

	public function daftarMember()
	{
		$data['NAMA_LENGKAP']  = $this->input->post('namaMember');
		$data['ALAMAT'] = $this->input->post('alamatMember');
		$data['TELEPON'] = $this->input->post('nomorTeleponMember');
		$data['EMAILUSER'] = $this->input->post('emailMember');
		$data['USERNAME'] = $this->input->post('usernameMember');
		$data['PASSWORD_LOG'] = sha1($this->input->post('passwordMember'));
		$data['GRADE_USER']=$this->input->post('levelMember');
		$data['STATUS_AKTIF'] = 'aktif';
		$data['KONFIRMASI'] = '1';
		$this->mdlUser->tambahMember($data);
		$this->session->set_flashdata('sukses', 'Data member berhasil ditambahkan');
		redirect('admin/member','refresh');
	}

	public function editdataMember()
	{
		$idMember = $_GET['id'];
		$dataMember = $this->mdlUser->editMember($idMember);
		echo json_encode($dataMember);
	}

	public function updateMember()
	{
		$id = $this->input->post('idMember');
		$data['NAMA_LENGKAP']  = $this->input->post('namaMember');
		$data['ALAMAT'] = $this->input->post('alamatMember');
		$data['TELEPON'] = $this->input->post('nomorTeleponMember');
		$data['EMAILUSER'] = $this->input->post('emailMember');
		$data['USERNAME'] = $this->input->post('usernameMember');
		$data['PASSWORD_LOG'] = sha1($this->input->post('passwordMember'));
		$data['GRADE_USER']=$this->input->post('levelMember');
		$data['STATUS_AKTIF'] = 'aktif';
		$data['KONFIRMASI'] = '1';
		$this->mdlUser->updateMember($id, $data);
		$this->session->set_flashdata('sukses', 'data member berhasil di update');
		redirect('admin/member','refresh');
	}

	public function hapus()
	{
		$id = $_GET['idMember'];
		$this->mdlUser->hapusMember($id);

		$this->session->set_flashdata('sukses', 'data member berhasil dihapus');
		redirect('admin/member','refresh');
	}

}

/* End of file Member.php */
/* Location: ./application/controllers/admin/Member.php */