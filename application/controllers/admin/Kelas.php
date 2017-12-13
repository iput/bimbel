<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kelas', 'mdlKelas');
		$this->load->model('M_grup','mdlBimbel');
	}

	public function index()
	{
		$data['dataKelas'] = $this->mdlKelas->dataKelas();
		$data['pelaksana'] = $this->mdlBimbel->dataGrup();
		$data['page'] = 'kelasUmum';
		$this->load->view('admin/main', $data);
	}

	public function tambahKelas()
	{
		$data['ID_BIMBEL'] = $this->input->post('pelaksanaKelas');
		$data['NAMA_KELAS'] = $this->input->post('namaKelas');
		$data['KUOTA_KELAS'] = $this->input->post('kuotaKelas');
		$data['TANGGAL_PELAKSANAAN'] = $this->input->post('tanggalKelas');
		$data['STATUS_KELAS'] = 'open';
		$data['LOKASI_KELAS'] = $this->input->post('lokasiKelas');
		$this->mdlKelas->tambahKelas($data);
		$this->session->set_flashdata('sukses', 'Kelas Baru berhasil ditambahkan');
		redirect('admin/kelas','refresh');
	}

	public function editKelas()
	{
		$id = $_GET['id'];
		$dataKelas = $this->mdlKelas->editKelas($id);
		echo json_encode($dataKelas);
	}

	public function updateKelas()
	{
		$idkelas = $this->input->post('idkelas');
		$data['ID_BIMBEL'] = $this->input->post('pelaksanaKelas');
		$data['NAMA_KELAS'] = $this->input->post('namaKelas');
		$data['KUOTA_KELAS'] = $this->input->post('kuotaKelas');
		$data['TANGGAL_PELAKSANAAN'] = $this->input->post('tanggalKelas');
		$data['STATUS_KELAS'] = 'open';
		$data['LOKASI_KELAS'] = $this->input->post('lokasiKelas');
		$this->mdlKelas->updateKelas($idkelas, $data);
		$this->session->set_flashdata('sukses', 'Data kelas berhasil diperbarui');
		redirect('admin/kelas','refresh');
	}

	public function hapus()
	{
		$idkelas = $_GET['idKelas'];
		$this->mdlKelas->hapusKelas($idkelas);
		$this->session->set_flashdata('sukses', 'Data Kelas berhasil dihapus');
		redirect('admin/kelas','refresh');
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/admin/Kelas.php */