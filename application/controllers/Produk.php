<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->library('layout');
	$this->load->view_data['base_url']=base_url();
}
	public function index()
	{
		$this->main();
	}

	public function main()
	{
		$data=$this->layout->main('','',true);
		$this->load->view('produk',$data);
	}
}
