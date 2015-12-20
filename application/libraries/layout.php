<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout {
	public $CI;
public function __construct()
{
	$this->CI=& get_instance();
	$this->CI->load->view_data['base_url']=base_url();
}
	public function index()
	{
		$this->main();
	}

	public function main($output=NULL)
	{
		$data['base_url']=base_url();
		$data['page_title']='Welcome';

		$output['_header']=$this->CI->load->view('layout/header',$data,true);
		// $output['_content']=$this->CI->load->view('content',$data,true);
		$output['_footer']=$this->CI->load->view('layout/footer','',true);
		RETURN $output;
	}
}
