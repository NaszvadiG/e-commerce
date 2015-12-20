<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->library('layout');
	$this->load->view_data['base_url']=base_url();
	$this->load->model('barangmodel');
}
	public function index()
	{
		
		$this->main();

	}

	public function detail($barang_id)
	{
		$data['qbarang'] = $this->barangmodel->select_by_id($barang_id);
		$this->load->view('frontend/detail',$data);

	}

	public function delete($gid)
	{
		$this->BarangModel->del_barang($gid);
		$this->load->view('backend/container');
	}

	public function main()
	{
		$data=$this->layout->main('','',true);
		$data['qbarang'] = $this->barangmodel->get_allbarang()->result();
		$this->load->view('backend/container',$data);
	}

	public function get_insert()
	{

		$this->load->view('tambah');
	}

	public function get_update($barang_id)
	{
		$data['qbarang'] = $this->barangmodel->select_by_id($barang_id);
		$this->load->view('update',$data);
	}


	public function proses_insert()
	{
		$data['nama'] = $this->input->post('nama');
		$data['harga'] = $this->input->post('harga');
		$data['deskripsi'] = $this->input->post('deskripsi');
		$data['jumlah'] = $this->input->post('jumlah');
		$data['img'] = $this->input->post('gambar');
		$this->barangmodel->insert_barang($data);
		redirect(site_url('barang'));
	}

	public function proses_update()
	{
		$barang_id = $this->input->post('barang_id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'harga' => $this->input->post('harga'),
			'deskripsi' => $this->input->post('deskripsi'),
			'jumlah' => $this->input->post('jumlah'),
			'img' => $this->input->post('gambar')
			 );
		$this->barangmodel->update_barang($barang_id,$data);
		redirect(site_url('barang'));
	}

	public function delete_barang($barang_id)
	{
		$data['qbarang'] = $this->barangmodel->select_by_id($barang_id);
		$this->barangmodel->del_barang($barang_id);
		redirect(site_url('barang'));
	}

	public function testing()
	{
		$data['qbarang'] = $this->barangmodel->get_allbarang()->result();
		$this->load->view('frontend/home',$data);
	}

	
	

	
}
