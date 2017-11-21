<?php 
/**
* 
*/
class customer_model extends CI_Model
{
	public $nama_table 	='customer';
	public $username	='username';
	public $order 		='DESC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil data seluruh mahasiswa
	function ambil_data(){
		$this->db->order_by($this->username,$this->order);
		return $this->db->get($this->nama_table)->result();

	}
function ambil_data_id($username){
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table)->row();

	}
	function cek_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();

	}

	//untuk insert data seluruh mahasiswa
	function tambah_data($data){
		$this->db->insert($this->nama_table,$data);
		

	}
	//untuk hapus data seluruh mahasiswa
	function hapus_data($username){
		$this->db->where($this->username,$username);
		$this->db->delete($this->nama_table);

		

	}
	//untuk edit data seluruh mahasiswa
	function edit_data($username,$data){
		$this->db->where($this->username,$username);
		$this->db->update($this->nama_table,$data);

	}

}
 ?>