<?php 
/**
 * 
 */
 class ceklogin_model extends CI_Model
 {
 	
 	public $nama_table_customer = 'Customer';
 	public $nama_table_karyawan = 'karyawan';
 	function __construct()
 	{
 		parent::__construct();

 	}
 	function cek_login_customer($username,$password){
 		$this->db->where('Username', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table_customer)->row(); 	
 	}
 	function cek_login_petugas($username,$password){
 		$this->db->where('Username_Karyawan', $username);
 		$this->db->where('Password', $password);
 		return $this->db->get($this->nama_table_karyawan)->row(); 	
 	}
 } ?>