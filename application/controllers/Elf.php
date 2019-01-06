<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elf extends CI_Controller {

/*	public function index()
	{
		$this->load->view('beranda');
	}*/

	public function besar() {

		$this->load->view('elf_besar');
	}

	public function sedang() {

		$this->load->view('elf_sedang');
	}

	public function pesan() {

		$this->load->view('pesan_elf');
	}
}
