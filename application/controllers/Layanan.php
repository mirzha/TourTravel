<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function index()
	{
		$this->load->view('layanan');
	}

	public function mobil(){
		$this->load->model('Mobil_model');
        $data['mobil'] = $this->Mobil_model->StatusMobil();
		$this->load->view('mobil',$data);
	}

	public function bus(){
		$this->load->view('bus');
	}
	public function pariwisata(){
		$this->load->view('pariwisata');
	}
}