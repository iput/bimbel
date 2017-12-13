<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grup', 'mdlGrup');
		$this->load->model('M_users','mdlUser');
	}

	public function index()
	{
		$data['pengajar'] = $this->mdlUser->dataPengajar();
		$data['dataBimbel'] = $this->mdlGrup->dataGrup();
		$data['page'] = 'grupBimbel';
		$this->load->view('admin/main', $data);
	}

	public function daftarBimbel()
	{
		$data['ID_USER'] = $this->input->post('namaPemilik');
		$data['NAMA_BIMBEL']= $this->input->post('namaBimbel');
		$data['ALAMAT_BIMBEL']= $this->input->post('alamatBimbel');
		$data['EMAIL_BIMBEL']= $this->input->post('emailBimbel');
		$data['TELEPON_BIMBEL']= $this->input->post('teleponBimbel');
		$data['KONSENTRASI_BIMBEL']= $this->input->post('bidangBimbel');
		$data['STATUS_BIMBEL']= 'menunggu';
		$data['RATING_BIMBEL']= '0';
		$this->mdlGrup->tambahBimbel($data);
		$this->session->set_flashdata('sukses', 'data bimbel berhasil ditambahkan');
		redirect('admin/grup','refresh');
	}

	public function editBimbel()
	{
		$id = $_GET['id'];
		$dataBimbel = $this->mdlGrup->editBimbel($id);
		echo json_encode($dataBimbel);
	}

	public function updateBimbel()
	{
		$id = $this->input->post('idBimbel');
		$data['ID_USER'] = '1';
		$data['NAMA_BIMBEL']= $this->input->post('namaBimbel');
		$data['ALAMAT_BIMBEL']= $this->input->post('alamatBimbel');
		$data['EMAIL_BIMBEL']= $this->input->post('emailBimbel');
		$data['TELEPON_BIMBEL']= $this->input->post('teleponBimbel');
		$data['KONSENTRASI_BIMBEL']= $this->input->post('bidangBimbel');
		$this->mdlGrup->updateBimbel($id, $data);
		$this->session->set_flashdata('sukses', 'data bimbel berhasil ditambahkan');
		redirect('admin/grup','refresh');
	}

	public function hapus()
	{
		$idBimbel = $_GET['idbimbel'];
		$this->mdlGrup->hapusBimbel($idBimbel);
		$this->session->set_flashdata('sukses', 'data grup bimbel berhasil dihapus');
		redirect('admin/grup','refresh');
	}

}

/* End of file Grup.php */
/* Location: ./application/controllers/admin/Grup.php */