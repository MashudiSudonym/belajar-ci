<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboard extends MY_Controller
{
  public function __construct(){
    parent::__construct();
  }

  function index(){
    $data['content_view'] = 'dashboard/dashboard1_v';
    $this->template->admin_template($data);
  }

  function dashboard2(){
    $data['content_view'] = 'dashboard/dashboard2_v';
    $this->template->admin_template($data);
  }

}

