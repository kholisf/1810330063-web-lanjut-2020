<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}
	public function index()
	{
		$data['tabel'] = $this->m_mahasiswa->semuadata();





		$this->load->view("Mahasiswa/v_index", $data);
	}


	public function tambah()
	{
		$this->load->view('mahasiswa/v_tambah');
	}
	public function proses_tambah()
	{
		// var_dump($this->input->post());
		$data = [
			'nim' => $this->input->post('txtnim'),
			'nama' => $this->input->post('txtnama'),
			'alamat' => $this->input->post('txtalamat')
		];
		$this->m_mahasiswa->simpanData($data);
		redirect('mahasiswa/index');
	}
	public function hapus($id = '')
	{
		$this->m_mahasiswa->hapusdata($id);
		redirect('mahasiswa/index');
	}

	public function edit($id = '')
	{
		$data['tabel'] = $this->m_mahasiswa->satuData($id);

		return $this->load->view('mahasiswa/v_edit', $data);
	}

	public function proses_edit()
	{
		$input_id = $this->input->post('txtid');
		$data = [
			'nim' => $this->input->post('txtnim'),
			'nama' => $this->input->post('txtnama'),
			'alamat' => $this->input->post('txtalamat')
		];
		$this->m_mahasiswa->simpanEdit($input_id, $data);
		redirect('mahasiswa/index');
	}
}
