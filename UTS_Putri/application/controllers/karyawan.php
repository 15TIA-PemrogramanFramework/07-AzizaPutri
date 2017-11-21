<?php 
/**
* 
*/
class karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('karyawan_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		
	}
	function index()
	{
		$data['karyawan']=$this->karyawan_model->ambil_data();
		$this->load->view('karyawan/karyawan_list',$data);
	}
	function tambah(){
		$data=array(
			'id_karyawan'=>set_value('id_karyawan'),
			'nama_karyawan'=>set_value('nama_karyawan'),
			'no_hp'=>set_value('no_hp'),
			'status'=>set_value('status'),
			'jenis_kelamin'=>set_value('jenis_kelamin'),
			'alamat'=>set_value('alamat'),
			'button'=>'Tambah',
			'action'=>site_url('karyawan/tambah_aksi'),

			);
		$this->load->view('karyawan/karyawan_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'id_karyawan'=>$this->input->post('id_karyawan'),
			'nama_karyawan'=>$this->input->post('nama_karyawan'),
			'no_hp'=>$this->input->post('no_hp'),
			'status'=>$this->input->post('status'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			
			
	);
		$this->karyawan_model->tambah_data($data);
		redirect(site_url('karyawan'));
}
function delete($id_karyawan){
	$this->karyawan_model->hapus_data($id_karyawan);
	redirect(site_url('karyawan'));
}
function edit($id_karyawan)
{
	$mhs = $this->karyawan_model->ambil_data_id($id_karyawan);
	$data=array(
			'id_karyawan'=>set_value('id_karyawan', $mhs->id_karyawan),
			'nama_karyawan'=>set_value('nama_karyawan', $mhs->nama_karyawan),
			'no_hp'=>set_value('no_hp', $mhs->no_hp),
			'status'=>set_value('status', $mhs->status),
			'jenis_kelamin'=>set_value('jenis_kelamin',$mhs->jenis_kelamin),
			'alamat'=>set_value('alamat',$mhs->alamat),
			'button'=>'Edit',
			'action'=>site_url('karyawan/edit_aksi'),
			);
	$this->load->view('karyawan/karyawan_form',$data);
}
function edit_aksi()
{
$data=array(
			'id_karyawan'=>$this->input->post('id_karyawan'),
			'nama_karyawan'=>$this->input->post('nama_karyawan'),
			'no_hp'=>$this->input->post('no_hp'),
			'status'=>$this->input->post('status'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			
			
	);
	$id_karyawan=$this->input->post('id_karyawan');
		$this->karyawan_model->edit_data($id_karyawan,$data);
		redirect(site_url('karyawan'));
}
}
 ?>