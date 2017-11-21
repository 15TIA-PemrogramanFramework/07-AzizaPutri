<?php 
/**
 * 
 */
 class pelaksanaan_model extends CI_model
 {
 	public $nama_table = 'Pelaksanaan';
 	public $id = 'id_pelaksanaan';
 	public $order = 'DSC';

 	function __construct()
 	{
 		parent::__construct();

 	}

 	function select_pelaksanaan()
 	{
 		$this->db->distinct();
 		$this->db->select('P.id_pelaksanaan, I.id_event, I.nama_event, p.tgl_peminjaman, C.username, C.nama_customer, C.no_hp');
 		$this->db->from('Pelaksanaan P');
 		$this->db->join('Jenis_Event I', 'P.id_event = I.id_event');
 		$this->db->join('Customer C', 'P.username = C.username');
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
 } ?>