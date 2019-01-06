<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

/*	public function index()
	{
		$this->load->view('beranda');
	}*/

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('mobil_model');
		$this->load->library('form_validation');
		
		$this->load->helper('form','url');
		
	}

	public function avanza() {

		
		$data['avanza'] = $this->mobil_model->count_avanza();

		$this->load->view('avanza',$data);
	}

	public function mobilio() {

		$data['mobilio'] = $this->mobil_model->count_mobilio();

		$this->load->view('mobilio',$data);
	}

	public function inova() {

		$data['inova'] = $this->mobil_model->count_innova();

		$this->load->view('inova',$data);
	}

		public function pesan()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_penyewa', 'Nama Penyewa', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
		$this->load->model('reservasi_model');	
        $this->load->view("pesan_mobil");
		if($this->form_validation->run()==FALSE){
			
		}else{
			$this->reservasi_model->insertReservasi();
			$this->load->view('tambah_reservasi_sukses');
		}
   
	}

	public function update($id_mobil)
	{
		$data["datamobil"] = $this->mobil_model->getDataById($id_mobil);
		
		$this->form_validation->set_rules('jenis_mobil','jenis_mobil','trim|required');
		if($this->form_validation->run()==FALSE){
			
			$this->load->view('admin/update_mobil',$data);
			
		}else{
			
			$this->mobil_model->update($id_mobil);
			$this->session->set_flashdata('pesan', 'Tambah Data Berhasil  ');
			redirect('daftar_mobil');
			
		}

	}

	public function delete($id_mobil)
	{
		$this->mobil_model->delete($id_mobil);
		redirect('daftar_mobil', 'refresh');
	}

	
}
