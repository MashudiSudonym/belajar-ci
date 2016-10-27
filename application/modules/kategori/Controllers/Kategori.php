<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MX_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('mdl_kategori');
	}

	function index() {
		$data['konten'] = $this->mdl_kategori->getKategori();
		$this->load->view('kategori_v', $data);
	}
}