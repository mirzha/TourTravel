<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata extends CI_Controller {

/*	public function index()
	{
		$this->load->view('beranda');
	}*/
		public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('pariwisata_model');
		$this->load->library('form_validation');
		
		$this->load->helper('form','url');
		
	}

	public function jogja() {

		$this->load->view('pariwisata_jogja');
	}

	public function bali() {

		$this->load->view('pariwisata_bali');
	}

	public function bromo() {

		$this->load->view('pariwisata_bromo');
	}

	public function malang() {

		$this->load->view('pariwisata_malang');
	}


		public function pesan()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_penyewa', 'Nama Penyewa', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
		$this->load->model('reservasi_model');	
        $this->load->view("pesan_pariwisata");
		if($this->form_validation->run()==FALSE){
			
		}else{
			$this->reservasi_model->insertReservasiPariwisata();
			$this->load->view('tambah_reservasi_sukses');
		}
   
	}

	public function update($id_paket_wisata)
	{
		$data["datawisata"] = $this->pariwisata_model->getDataById($id_paket_wisata);
		
		$this->form_validation->set_rules('nama_paket','Nama Paket','trim|required');
		if($this->form_validation->run()==FALSE){
			
			$this->load->view('admin/update_pariwisata',$data);
			
		}else{
			
			$this->pariwisata_model->update($id_paket_wisata);
			$this->session->set_flashdata('pesan', 'Tambah Data Berhasil  ');
			redirect('daftar_pariwisata');
			
		}

	}

	public function delete($id_paket_wisata)
	{
		$this->pariwisata_model->delete($id_paket_wisata);
		redirect('daftar_pariwisata', 'refresh');
	}
}
