<?php 
/**
* 
*/
class catering extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('catering_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}
		
	}
	function index()
	{
		$data['catering']=$this->catering_model->ambil_data();
		$this->load->view('catering/catering_list',$data);
	}
	function tambah(){
		$data=array(
			'id_catering'=>set_value('id_catering'),
			'pesan_makanan'=>set_value('pesan_makanan'),
			'pesan_minuman'=>set_value('pesan_minuman'),
			'jmlh_porsi_makanan'=>set_value('jmlh_porsi_makanan'),
			'jmlh_porsi_minuman'=>set_value('jmlh_porsi_minuman'),
			'button'=>'Tambah',
			'action'=>site_url('catering/tambah_aksi'),

			);
		$this->load->view('catering/catering_form',$data);
	}
	function tambah_aksi(){
		$data=array(
			'id_catering'=>$this->input->post('id_catering'),
			'pesan_makanan'=>$this->input->post('pesan_makanan'),
			'pesan_minuman'=>$this->input->post('pesan_minuman'),
			'jmlh_porsi_makanan'=>$this->input->post('jmlh_porsi_makanan'),
			'jmlh_porsi_minuman'=>$this->input->post('jmlh_porsi_minuman'),
			
			
	);
		$this->catering_model->tambah_data($data);
		redirect(site_url('catering'));
}
function delete($username){
	$this->catering_model->hapus_data($username);
	redirect(site_url('catering'));
}
function edit($username)
{
	$mhs = $this->catering_model->ambil_data_id($username);
	$data=array(
			'id_catering'=>set_value('id_catering', $mhs->id_catering),
			'pesan_makanan'=>set_value('pesan_makanan', $mhs->pesan_makanan),
			'pesan_minuman'=>set_value('pesan_minuman', $mhs->pesan_minuman),
			'jmlh_porsi_makanan'=>set_value('jmlh_porsi_makanan', $mhs->jmlh_porsi_makanan),
			'jmlh_porsi_minuman'=>set_value('jmlh_porsi_minuman',$mhs->jmlh_porsi_minuman),
			'button'=>'Edit',
			'action'=>site_url('catering/edit_aksi'),
			);
	$this->load->view('catering/catering_form',$data);
}
function edit_aksi()
{
$data=array(
			'id_catering'=>$this->input->post('id_catering'),
			'pesan_makanan'=>$this->input->post('pesan_makanan'),
			'pesan_minuman'=>$this->input->post('pesan_minuman'),
			'jmlh_porsi_makanan'=>$this->input->post('jmlh_porsi_makanan'),
			'jmlh_porsi_minuman'=>$this->input->post('jmlh_porsi_minuman'),
			
	);
	$username=$this->input->post('id_catering');
		$this->catering_model->edit_data($username,$data);
		redirect(site_url('catering'));
}
}
 ?>