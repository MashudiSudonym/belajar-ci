<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('crud_m');
	}

	function index(){
		$data['user'] = $this->crud_m->tampil_data()->result();
		$data['content_view'] = 'crud/crud_v';
		$this->template->crudmdl_template($data);
	}

	function tambah(){
		$data['content_view'] = 'crud/input_v';
		$this->template->crudmdl2_template($data);
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
					'nama' => $nama,
					'alamat' => $alamat,
					'pekerjaan' => $pekerjaan
				);

		$this->crud_m->input_data($data, 'user');
		redirect('crud/');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->crud_m->hapus_data($where, 'user');
		redirect('crud/');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->crud_m->edit_data($where, 'user')->result();
		//$this->load->view('edit_v', $data);
		$data['content_view'] = 'crud/edit_v';
		$this->template->crudmdl2_template($data);
	}

	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');

		$data = array(
					'nama' => $nama,
					'alamat' => $alamat,
					'pekerjaan' => $pekerjaan
				);

		$where = array(
					'id' => $id
				);

		$this->crud_m->update_data($where, $data, 'user');
		redirect('crud/');
	}
}