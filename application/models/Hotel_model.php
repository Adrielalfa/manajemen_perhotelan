<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_model extends CI_Model{
	
	public function tampil(){
		$isi = $this->db->query("SELECT * FROM daftar_kamar");
		return $isi;
	}
	
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
}