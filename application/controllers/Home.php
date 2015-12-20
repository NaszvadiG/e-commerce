<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->library('layout');
	$this->load->view_data['base_url']=base_url();
	$this->load->model('barangmodel');
}

	public function index()
	{
		$data['qbarang'] = $this->barangmodel->get_allbarang()->result();
		$this->load->view('frontend/home',$data);
	}

	public function detail($barang_id)
	{
		$data['qbarang'] = $this->barangmodel->select_by_id($barang_id);
		$this->load->view('frontend/layout/header');
		$this->load->view('frontend/detail',$data);
		$this->load->view('frontend/layout/footer');

	}
}
