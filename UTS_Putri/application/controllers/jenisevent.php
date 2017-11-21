<?php 
/**
* 
*/
class jenisevent extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('jenisevent_model');
		
	}
	function index()
	{
		$data['jenisevent']=$this->jenisevent_model->ambil_data();
		$this->load->view('jenisevent/jenisevent_list',$data);
	}
	function tambah(){
		$data=array(
			'nama_event'=>set_value('nama_event'),
			'harga'=>set_value('harga'),
			'ukuran_tempat'=>set_value('ukuran_tempat'),
			'id_event'=>set_value('id_event'),
			'button'=>'Tambah',
			'action'=>site_url('jenisevent/tambah_aksi'),

			);
		$this->load->view('jenisevent/jenisevent_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_event'=>$this->input->post('nama_event'),
			'ukuran_tempat'=>$this->input->post('ukuran_tempat'),
			'harga'=>$this->input->post('harga'),
			'id_event'=>$this->input->post('id_event'),
			
	);
		$this->jenisevent_model->tambah_data($data);
		redirect(site_url('jenisevent'));
}
function delete($username){
	$this->jenisevent_model->hapus_data($username);
	redirect(site_url('jenisevent'));
}
function edit($username)
{
	$mhs = $this->jenisevent_model->ambil_data_id($username);
	$data=array(
			'id_event'=>set_value('id_event', $mhs->id_event),
			'nama_event'=>set_value('nama_event', $mhs->nama_event),
			'ukuran_tempat'=>set_value('ukuran_tempat', $mhs->ukuran_tempat),
			'harga'=>set_value('harga',$mhs->harga),
			'button'=>'Edit',
			'action'=>site_url('jenisevent/edit_aksi'),
			);
	$this->load->view('jenisevent/jenisevent_form',$data);
}
function edit_aksi()
{
$data=array(
			'nama_event'=>$this->input->post('nama_event'),
			'id_event'=>$this->input->post('id_event'),
			'ukuran_tempat'=>$this->input->post('ukuran_tempat'),
			'harga'=>$this->input->post('harga'),
	);
	$username=$this->input->post('id_event');
		$this->jenisevent_model->edit_data($username,$data);
		redirect(site_url('jenisevent'));
}
}
 ?>