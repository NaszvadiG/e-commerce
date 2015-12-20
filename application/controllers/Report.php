<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Report extends CI_Controller {

	public function __construct()
{
	parent::__construct();	
	$this->load->model('barangmodel');
}
 
	public function pdf()
	{
		$this->load->library('pdfgenerator');
 
		$data['qbarang']=$this->barangmodel->get_allbarang()->result();
 
	    $html = $this->load->view('layoutPdf', $data, true);
	    
	    $this->pdfgenerator->generate($html,'contoh');
	}
}