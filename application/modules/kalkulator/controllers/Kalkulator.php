<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends MY_Controller // class Kalkulator disamakan dengan nama file Kalkulator.php huruf kapital berpengaruh
{
	public function __construct() {
		parent::__construct();
	}

	// halaman awal
	function index() {
		$data['content_view'] = 'kalkulator/kalkulator_v'; // mengambil file kalkulator_v.php di folder kalkulator/views
		$this->template->mdl_template($data); // mengambil view dari folder template yang bernama mdl_template_v.php
	}

	// sekarang buat logic hitung-hitungannya
	function hasil_hitung() {
		$ang1 = $this->input->post("angka1"); // angka 1 dapat dari nama input 
		$ang2 = $this->input->post("angka2"); // angka 2 dapat dari nama input 
		$operasi = $this->input->post("operasi"); // operasi dapat dari nama input 
		$hasil = 0;

		// saya pakai switch-case, kalau mau pakai if juga bisa
		switch ($operasi) {
			case '+': // tanda itu diambil dari operasi, kalau pakai huruf semisal tambah, kurang bagi, value juga harus sama tambah, kurang, bagi, saya pakai tanda biar cepat ngetiknya
				
				// ini bagian ngitungnya
				$hasil = $ang1 + $ang2;

			break;

			// copas aja biar cepet, ganti tanda operasi aja.

			case '-': // tanda itu diambil dari operasi, kalau pakai huruf semisal tambah, kurang bagi, value juga harus sama tambah, kurang, bagi, saya pakai tanda biar cepat ngetiknya
				
				// ini bagian ngitungnya
				$hasil = $ang1 - $ang2;

			break;

			case '*': // tanda itu diambil dari operasi, kalau pakai huruf semisal tambah, kurang bagi, value juga harus sama tambah, kurang, bagi, saya pakai tanda biar cepat ngetiknya
				
				// ini bagian ngitungnya
				$hasil = $ang1 * $ang2;

			break;
			
			case '/': // tanda itu diambil dari operasi, kalau pakai huruf semisal tambah, kurang bagi, value juga harus sama tambah, kurang, bagi, saya pakai tanda biar cepat ngetiknya
				
				// ini bagian ngitungnya
				$hasil = $ang1 / $ang2;

			break;
		}

		// bagian ini buat nyimpen hasil tadi dan biar bisa kita tampilin lagi di halaman view
		$data['angka1'] = $ang1;
		$data['angka2'] = $ang2;
		$data['operasi'] = $operasi;
		$data['hasil'] = $hasil;
		$data['content_view'] = 'kalkulator/kalkulator_v';
		$this->template->mdl_template($data);

	}


}