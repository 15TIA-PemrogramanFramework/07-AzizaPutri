<?php /**
* 
*/
class pelaksanaan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('pelaksanaan_model');
		$this->load->model('jenisevent_model');
		$this->load->model('customer_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['pelaksanaan'] = $this->pelaksanaan_model->select_pelaksanaan();
		$this->load->view('pelaksanaan/pelaksanaan_list',$data);
	}

	function tambah() 
	{
		$data=array(
			'id_pelaksanaan'=>set_value('id_pelaksanaan'),
			'id_event'=>$this->jenisevent_model->ambil_data(),
			'username'=>$this->customer_model->ambil_data(),
			'tgl_peminjaman'=>set_value('tgl_peminjaman'),
			'button'=>'Tambah',
			'action'=>site_url('pelaksanaan/tambah_aksi'),
		);
		$this->load->view('pelaksanaan/pelaksanaan_form',$data);
	}
	function tambah_aksi() 
	{
		$data=array(
			'id_pelaksanaan'=>$this->input->post('id_pelaksanaan'),
			'id_event'=>$this->input->post('id_event'),
			'username'=>$this->input->post('username'),
			'tgl_peminjaman'=>$this->input->post('tgl_peminjaman'),
			
		);
		$this->pelaksanaan_model->tambah_data($data);
		redirect(site_url('pelaksanaan'));
	}
	function delete($id_pelaksanaan)
 	{
		$this->pelaksanaan_model->hapus_data($id_pelaksanaan);
		redirect(site_url('pelaksanaan'));
	}
	function Update($ID)
 	{
 		$mhs=$this->pelaksanaan_model->ambil_data_id($ID);
 		
 		$Customer=($this->customer_model->ambil_data_id($mhs->username));
		$arrCustomer = $this->customer_model->ambil_data();
		$indexCustomer=0; 
		foreach ($arrCustomer as $key => $value) {
			if($value->nama_customer == $Customer->nama_customer){
				break;
			}
			else{
				$indexCustomer++;
			}
		}

		$jenisevent=($this->jenisevent_model->ambil_data_id($mhs->id_event));
		$arrjenisevent = $this->jenisevent_model->ambil_data();
		$indexjenisevent=0; 
		foreach ($arrjenisevent as $key => $value) {
			if($value->nama_event == $jenisevent->nama_event){
				break;
			}
			else{
				$indexjenisevent++;
			}
		}
		
		$data=array(
			'id_pelaksanaan'=>set_value('id_pelaksanaan',$mhs->id_pelaksanaan),
			'id_event'=>$this->jenisevent_model->ambil_data(),
			'username'=>$this->customer_model->ambil_data(),
			'tgl_peminjaman'=>set_value('tgl_peminjaman',$mhs->tgl_peminjaman),
			'button'=>'Edit',
			'action'=>site_url('pelaksanaan/Update_aksi'),
		);
		$this->load->view('pelaksanaan/pelaksanaan_form',$data);
 	}
 	function Update_aksi()
 	{
 		$data=array(
			'id_pelaksanaan'=>$this->input->post('id_pelaksanaan'),
			'id_event'=>$this->input->post('id_event'),
			'username'=>$this->input->post('username'),
			'tgl_peminjaman'=>$this->input->post('tgl_peminjaman'),
			
		);
 		$id_pelaksanaan=$this->input->post('id_pelaksanaan');
 		$this->pelaksanaan_model->edit_data($id_pelaksanaan,$data);
 		redirect(site_url('pelaksanaan'));
 	}
} ?>