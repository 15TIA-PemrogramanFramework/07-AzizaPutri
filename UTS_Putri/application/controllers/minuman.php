<?php 
/**
* 
*/
class minuman extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('minuman_model');
		
	}
	function index()
	{
		$data['minuman']=$this->minuman_model->ambil_data();
		$this->load->view('minuman/minuman_list',$data);
	}
	function tambah(){
		$data=array(
			'pesan_minuman'=>set_value('pesan_minuman'),
			'id_minuman'=>set_value('id_minuman'),
			'harga'=>set_value('harga'),
			'button'=>'Tambah',
			'action'=>site_url('minuman/tambah_aksi'),

			);
		$this->load->view('minuman/minuman_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'pesan_minuman'=>$this->input->post('pesan_minuman'),
			'id_minuman'=>$this->input->post('id_minuman'),
			'harga'=>$this->input->post('harga'),
			
	);
		$this->minuman_model->tambah_data($data);
		redirect(site_url('minuman'));
}
function delete($username){
	$this->minuman_model->hapus_data($username);
	redirect(site_url('minuman'));
}
function edit($username)
{
	$mhs = $this->minuman_model->ambil_data_id($username);
	$data=array(
			'id_minuman'=>set_value('id_minuman', $mhs->id_minuman),
			'pesan_minuman'=>set_value('pesan_minuman', $mhs->pesan_minuman),
			'harga'=>set_value('harga',$mhs->harga),
			'button'=>'Edit',
			'action'=>site_url('minuman/edit_aksi'),
			);
	$this->load->view('minuman/minuman_form',$data);
}
function edit_aksi()
{
$data=array(
			'pesan_minuman'=>$this->input->post('pesan_minuman'),
			'id_minuman'=>$this->input->post('id_minuman'),
			'harga'=>$this->input->post('harga'),
	);
	$username=$this->input->post('id_minuman');
		$this->minuman_model->edit_data($username,$data);
		redirect(site_url('minuman'));
}
}
 ?>