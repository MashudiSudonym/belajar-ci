<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Hitung extends MY_Controller
{
  public function __construct(){
    parent::__construct();
  }

  function index() {
    $data['content_view'] = 'hitung/hitung_v';
    $this->template->trymdl_template($data);
  }

  function hasil_hitung() {
    $ang1 = $this->input->post("angka1");
    $ang2 = $this->input->post("angka2");
    $operasi = $this->input->post("operasi");
    $hasil = 0;

    switch ($operasi) {
        case '+':
            $hasil = $ang1 + $ang2;
        break;
        case '-':
            $hasil = $ang1 - $ang2;
        break;
        case '*':
            $hasil = $ang1 * $ang2;
        break;
        case '/':
            $hasil = $ang1 / $ang2;
        break;
    }

    $data['angka1'] = $ang1;
    $data['angka2'] = $ang2;
    $data['operasi'] = $operasi;
    $data['hasil'] = $hasil;
    $data['content_view'] = 'hitung/hitung_v';
    
    $this->template->trymdl_template($data);
  }

}

