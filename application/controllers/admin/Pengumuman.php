<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengumuman', 'mdlPngumuman');
	}

	public function index()
	{
		$data['dataPengumuman'] = $this->mdlPngumuman->dataPengumuman();
		$data['page'] ='pengumuman';
		$this->load->view('admin/main', $data);
	}

	public function tambahPengumuman()
	{
		$data['JUDUL_PENGUMUMAN'] = $this->input->post('judulPengumuman');
		$data['KONTEN_PENGUMUMAN'] = $this->input->post('kontenPengumuman');
		$data['TEMPAT_PELAKSANAAN'] = $this->input->post('tempatPengumuman');
		$data['TANGGAL_PENGUMUMAN'] = $this->input->post('tanggalPengumuman');
		$data['STATUS_PENGUMUMAN'] = 'konfirmasi';
		$data['NAMA_PEMBUAT'] = 'admin';
		$data['EMAIL_PEMBUAT'] = 'admin@portalbimbel.com';
		$this->mdlPngumuman->tambahPengumuman($data);
		$this->session->set_flashdata('sukses', 'Data pengumuman baru berhasil ditambahkan dan dikonfirmasi sebagai sah');
		redirect('admin/pengumuman','refresh');
	}

	public function editPengumuman()
	{
		$id = $_GET['id'];
		$data = $this->mdlPngumuman->editPengumuman($id);
		echo json_encode($data);
	}

	public function updatePengumuman()
	{
		$id = $this->input->post('idPengumuman');
		$data['JUDUL_PENGUMUMAN'] = $this->input->post('judulPengumuman');
		$data['KONTEN_PENGUMUMAN'] = $this->input->post('kontenPengumuman');
		$data['TEMPAT_PELAKSANAAN'] = $this->input->post('tempatPengumuman');
		$data['TANGGAL_PENGUMUMAN'] = $this->input->post('tanggalPengumuman');
		$data['STATUS_PENGUMUMAN'] = 'konfirmasi';
		$data['NAMA_PEMBUAT'] = 'admin';
		$data['EMAIL_PEMBUAT'] = 'admin@portalbimbel.com';
		$this->mdlPngumuman->updatePengumuman($id,$data);
		$this->session->set_flashdata('sukses', 'Data pengumuman berhasil diperbarui dan dikonfirmasi sebagai sah');
		redirect('admin/pengumuman','refresh');	
	}

	public function hapus()
	{
		$id = $_GET['idPengumuman'];
		$this->mdlPngumuman->hapusPengumuman($id);
		$this->session->set_flashdata('sukses', 'Data pengumuman berhasil dihapus');
		redirect('admin/pengumuman','refresh');	
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/controllers/admin/Pengumuman.php */