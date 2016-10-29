<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Template extends MY_Controller
{
  public function __construct(){
    parent::__construct();
  }

  function sample_template($data = null){
    $this->load->view('template/sample_template_v', $data);
  }

  function admin_template($data = null) {
    $this->load->view('template/admin_template_v', $data);
  }

  function trymdl_template($data = null) {
  	$this->load->view('template/trymdl_template_v', $data);
  }

  function mdl_template($data = null) {
    $this->load->view('template/mdl_template_v', $data);
  }

  function crudmdl_template($data = null) {
    $this->load->view('template/crudmdl_template_v', $data);
  }

  function crudmdl2_template($data = null) {
    $this->load->view('template/crudmdl2_template_v', $data);
  }

}
 ?>
