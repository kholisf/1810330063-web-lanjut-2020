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


	public function create()
	{
		$this->load->view('mahasiswa/v_create');
	}
}
