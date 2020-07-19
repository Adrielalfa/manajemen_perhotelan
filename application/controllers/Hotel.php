<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Hotel_model');
	}
	
	public function index(){
		$data['daftar_kamar'] = $this->Hotel_model->tampil()->result();
		$this->load->view('templates/header', $data);
		//$this->load->view('templates/sidebar');
		//$this->load->view('templates/footer');
	}
	
		function edit($id_kamar){
		$where = array('id_kamar' => $id_kamar);
		$data['daftar_kamar'] = $this->Hotel_model->edit_data($where,'daftar_kamar')->result();
		$this->load->view('v_edit',$data);
	
	}
	
	public function tipe(){
		$this->load->view('templates/tipekamar');
	}
	
	public function reservasi(){
		$this->load->view('templates/reservasi');
	}
	
	public function fasilitas(){
		$this->load->view('templates/fasilitas');
	}
	
	public function contact(){
		$this->load->view('templates/contact');
	}
}