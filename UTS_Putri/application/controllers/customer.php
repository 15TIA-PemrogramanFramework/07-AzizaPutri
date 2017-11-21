<?php 
/**
* 
*/
class customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('customer_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		
	}
	function index()
	{
		$data['customer']=$this->customer_model->ambil_data();
		$this->load->view('customer/customer_list',$data);
	}
	function tambah(){
		$data=array(
			'nama_customer'=>set_value('nama_customer'),
			'password'=>set_value('password'),
			'no_hp'=>set_value('no_hp'),
			'alamat'=>set_value('alamat'),
			'username'=>set_value('username'),
			'button'=>'Tambah',
			'action'=>site_url('customer/tambah_aksi'),

			);
		$this->load->view('customer/customer_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'nama_customer'=>$this->input->post('nama_customer'),
			'password'=>$this->input->post('password'),
			'no_hp'=>$this->input->post('no_hp'),
			'alamat'=>$this->input->post('alamat'),
			'username'=>$this->input->post('username'),
			
			
	);
		$this->customer_model->tambah_data($data);
		redirect(site_url('customer'));
}
		function delete($username){
			$this->customer_model->hapus_data($username);
			redirect(site_url('customer'));
}
function edit($username)
{
	$mhs = $this->customer_model->ambil_data_id($username);
	$data=array(
			'nama_customer'=>set_value('nama_customer', $mhs->nama_customer),
			'password'=>set_value('password', $mhs->password),
			'no_hp'=>set_value('no_hp', $mhs->no_hp),
			'alamat'=>set_value('alamat', $mhs->alamat),
			'username'=>set_value('username',$mhs->username),
			'button'=>'Edit',
			'action'=>site_url('customer/edit_aksi'),
			);
	$this->load->view('customer/customer_form',$data);
}
function edit_aksi()
{
$data=array(
			'nama_customer'=>$this->input->post('nama_customer'),
			'password'=>$this->input->post('password'),
			'no_hp'=>$this->input->post('no_hp'),
			'alamat'=>$this->input->post('alamat'),
			
			
	);
	$username=$this->input->post('username');
		$this->customer_model->edit_data($username,$data);
		redirect(site_url('customer'));
}
}
 ?>