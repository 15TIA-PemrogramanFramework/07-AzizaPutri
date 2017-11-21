<?php /**
* 
*/
class pemesanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('pemesanan_model');
		$this->load->model('customer_model');
		$this->load->model('makanan_model');
		$this->load->model('minuman_model');
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

	}

	function index()
	{
		$data['pemesanan'] = $this->pemesanan_model->select_pemesanan();
		$this->load->view('pemesanan/pemesanan_list',$data);
	}

	function tambah() 
	{
		$data=array(
			'id_pemesanan'=>set_value('id_pemesanan'),
			'id_makanan'=>$this->makanan_model->ambil_data(),
			'id_minuman'=>$this->minuman_model->ambil_data(),
			'username'=>$this->customer_model->ambil_data(),
			'total_pemesanan'=>set_value('total_pemesanan'),
			'button'=>'Tambah',
			'action'=>site_url('pemesanan/tambah_aksi'),
		);
		$this->load->view('pemesanan/pemesanan_form',$data);
	}
	function tambah_aksi() 
	{
		$data=array(
			'id_pemesanan'=>$this->input->post('id_pemesanan'),
			'id_makanan'=>$this->input->post('id_makanan'),
			'id_minuman'=>$this->input->post('id_minuman'),
			'username'=>$this->input->post('username'),
			'total_pemesanan'=>$this->input->post('total_pemesanan'),
			
		);
		$this->pemesanan_model->tambah_data($data);
		redirect(site_url('pemesanan'));
	}
	function delete($id_pemesanan)
 	{
		$this->pemesanan_model->hapus_data($id_pemesanan);
		redirect(site_url('pemesanan'));
	}
	function Update($ID)
 	{
 		$mhs=$this->pemesanan_model->ambil_data_id($ID);
 		
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

 		$makanan=($this->makanan_model->ambil_data_id($mhs->id_makanan));
		$arrmakanan = $this->makanan_model->ambil_data();
		$indexmakanan=0; 
		foreach ($arrmakanan as $key => $value) {
			if($value->pesan_makanan == $makanan->pesan_makanan){
				break;
			}
			else{
				$indexmakanan++;
			}
		}

		$minuman=($this->minuman_model->ambil_data_id($mhs->id_minuman));
		$arrminuman = $this->minuman_model->ambil_data();
		$indexminuman=0; 
		foreach ($arrminuman as $key => $value) {
			if($value->pesan_minuman == $minuman->pesan_minuman){
				break;
			}
			else{
				$indexminuman++;
			}
		}
		
		$data=array(
			'id_pemesanan'=>set_value('id_pemesanan',$mhs->id_pemesanan),
			'id_makanan'=>$this->makanan_model->ambil_data(),
			'id_minuman'=>$this->minuman_model->ambil_data(),
			'username'=>$this->customer_model->ambil_data(),
			'total_pemesanan'=>set_value('total_pemesanan',$mhs->total_pemesanan),
			'button'=>'Edit',
			'action'=>site_url('pemesanan/Update_aksi'),
		);
		$this->load->view('pemesanan/pemesanan_form',$data);
 	}
 	function Update_aksi()
 	{
 		$data=array(
			'id_pemesanan'=>$this->input->post('id_pemesanan'),
			'id_makanan'=>$this->input->post('id_makanan'),
			'id_minuman'=>$this->input->post('id_minuman'),
			'username'=>$this->input->post('username'),
			'total_pemesanan'=>$this->input->post('total_pemesanan'),
			
		);
 		$id_pemesanan=$this->input->post('id_pemesanan');
 		$this->pemesanan_model->edit_data($id_pemesanan,$data);
 		redirect(site_url('pemesanan'));
 	}
} ?>