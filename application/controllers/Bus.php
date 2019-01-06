<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('bus_model');
		$this->load->library('form_validation');
		
		$this->load->helper('form','url');
		
	}
/*	public function index()
	{
		$this->load->view('beranda');
	}*/

	public function besar() {

		$this->load->view('bus_besar');
	}

	public function sedang() {

		$this->load->view('bus_sedang');
	}

	public function pesan()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_penyewa', 'Nama Penyewa', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'no_hp', 'trim|required');
		$this->load->model('reservasi_model');	
        $this->load->view("pesan_bus");
		if($this->form_validation->run()==FALSE){
			
		}else{
			$this->reservasi_model->insertReservasiBus();
			$this->load->view('tambah_reservasi_sukses');
		}
	}

	public function update($id_bus_elf)
	{
		$data["databus"] = $this->bus_model->getDataById($id_bus_elf);
		
		$this->form_validation->set_rules('jenis','jenis bus','trim|required');
		if($this->form_validation->run()==FALSE){
			
			$this->load->view('admin/update_bus',$data);
			
		}else{
			
			$this->bus_model->update($id_bus_elf);
			$this->session->set_flashdata('pesan', 'Tambah Data Berhasil  ');
			redirect('daftar_bus');
			
		}

	}

	public function delete($id_bus_elf)
	{
		$this->bus_model->delete($id_bus_elf);
		redirect('daftar_bus', 'refresh');
	}

}
