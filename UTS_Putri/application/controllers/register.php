<?php
/**
 * 
 */
 class register extends CI_Controller

 {
 	
 	function __construct()
 	{
 		parent::__construct();
		$this->load->model('customer_model');
 	}
 	function index()
 	{
		$data=array(
			'nama_customer'=>set_value('nama_customer'),
			'password'=>set_value('password'),
			'no_hp'=>set_value('no_hp'),
			'alamat'=>set_value('alamat'),
			'username'=>set_value('username'),
			'button'=>'Tambah',
			'action'=>site_url('register/tambah_aksi'),

			);
		$this->load->view('register',$data);
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
		redirect(site_url('login'));
}
		} ?>