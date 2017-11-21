<?php 
/**
 * 
 */
 class pemesanan_model extends CI_model
 {
 	public $nama_table = 'pemesanan';
 	public $id = 'id_pemesanan';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();

 	}

 	function select_pemesanan()
 	{
 		$this->db->distinct();
 		$this->db->select('P.id_pemesanan, P.total_pemesanan, Ma.id_makanan, Ma.pesan_makanan, Mi.id_minuman, Mi.pesan_minuman, C.username, C.nama_customer');
 		$this->db->from('pemesanan P');
 		$this->db->join('Customer C', 'P.username = C.username');
 		$this->db->join('Makanan Ma', 'P.id_makanan = Ma.id_makanan');
 		$this->db->join('Minuman Mi', 'P.id_minuman = Mi.id_minuman');
 		return $this->db->get($this->nama_table)->result();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function ambil_data_id($id){
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();

	}
 	function hapus_data($id){
		$this->db->where($this->id,$id);
		$this->db->delete($this->nama_table);
	}
	//untuk edit data seluruh mahasiswa
	function edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);

	}
 } 
 ?>