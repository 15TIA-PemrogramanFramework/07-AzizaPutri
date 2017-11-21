<?php 
/**
* 
*/
class makanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('makanan_model');
		
	}
	function index()
	{
		$data['makanan']=$this->makanan_model->ambil_data();
		$this->load->view('makanan/makanan_list',$data);
	}
	function tambah(){
		$data=array(
			'pesan_makanan'=>set_value('pesan_makanan'),
			'id_makanan'=>set_value('id_makanan'),
			'harga'=>set_value('harga'),
			'button'=>'Tambah',
			'action'=>site_url('makanan/tambah_aksi'),

			);
		$this->load->view('makanan/makanan_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'pesan_makanan'=>$this->input->post('pesan_makanan'),
			'id_makanan'=>$this->input->post('id_makanan'),
			'harga'=>$this->input->post('harga'),
			
	);
		$this->makanan_model->tambah_data($data);
		redirect(site_url('makanan'));
}
function delete($username){
	$this->makanan_model->hapus_data($username);
	redirect(site_url('makanan'));
}
function edit($username)
{
	$mhs = $this->makanan_model->ambil_data_id($username);
	$data=array(
			'id_makanan'=>set_value('id_makanan', $mhs->id_makanan),
			'pesan_makanan'=>set_value('pesan_makanan', $mhs->pesan_makanan),
			'harga'=>set_value('harga',$mhs->harga),
			'button'=>'Edit',
			'action'=>site_url('makanan/edit_aksi'),
			);
	$this->load->view('makanan/makanan_form',$data);
}
function edit_aksi()
{
$data=array(
			'pesan_makanan'=>$this->input->post('pesan_makanan'),
			'id_makanan'=>$this->input->post('id_makanan'),
			'harga'=>$this->input->post('harga'),
	);
	$username=$this->input->post('id_makanan');
		$this->makanan_model->edit_data($username,$data);
		redirect(site_url('makanan'));
}
}
 ?>