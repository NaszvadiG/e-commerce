<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangModel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	
	public function get_allbarang()
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->order_by('barang_id','DESC');

		return $this->db->get();
	}

	public function select_by_id($barang_id)
	{
		$this->db->where('barang_id',$barang_id);
        $query=$this->db->get('barang');
        return $query->result();
	}

	public function insert_barang($data)
	{
		$this->db->insert('barang',$data);
	}

	public function del_barang($barang_id)
	{
		$this->db->where('barang_id', $barang_id);
		$this->db->delete('barang');
	}

	public function update_barang($barang_id,$data)
	{
		$this->db->where('barang_id', $barang_id);
		$this->db->update('barang', $data);
	}

}
