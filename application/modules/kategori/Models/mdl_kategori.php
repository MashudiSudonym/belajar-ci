<?php 

class Mdl_kategori extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	function getKategori() {
		$this->db->select('id, kategori');
		$this->db->from('ceritanyatabel');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
}