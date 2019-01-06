<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi_model extends CI_Model {


	public function insertReservasi()
		{
			// idPegawai = 1
			$object = array(
				'id_transaksi_mobil' => $this->input->post('id_transaksi_mobil'),
				'pilihan' => $this->input->post('pilihan'),
				'nama_penyewa' => $this->input->post('nama_penyewa'),
				'no_hp' => $this->input->post('no_hp'), 
				 'tgl_sewa' => $this->input->post('tgl_sewa'),
				  'tgl_kembali' => $this->input->post('tgl_kembali'),
				'jml_hari' => $this->input->post('jml_hari'), 
				 'tujuan' => $this->input->post('tujuan'),
				  	  
				);
			$this->db->insert('transaksi_mobil', $object);
		}
	public function insertReservasiBus()
		{
			// idPegawai = 1
			$object = array(
				'id_trans_bus_elf' => $this->input->post('id_trans_bus_elf'),
				'pilihan' => $this->input->post('pilihan'),
				'nama_penyewa' => $this->input->post('nama_penyewa'),
				'no_hp' => $this->input->post('no_hp'), 
				 'tgl_sewa' => $this->input->post('tgl_sewa'),
				  'tgl_kembali' => $this->input->post('tgl_kembali'),
				'jml_hari' => $this->input->post('jml_hari'), 
				 'tujuan' => $this->input->post('tujuan'),
				  	  
				);
			$this->db->insert('transaksi_bus_elf', $object);
		}
	public function insertReservasiPariwisata()
		{
			// idPegawai = 1
			$object = array(
				'id_trans_paket' => $this->input->post('id_trans_paket'),
				'pilihan' => $this->input->post('pilihan'),
				'nama_penyewa' => $this->input->post('nama_penyewa'),
				'no_hp' => $this->input->post('no_hp'), 
				 'tgl_sewa' => $this->input->post('tgl_sewa'),
				'jml_hari' => $this->input->post('jml_hari'), 
				);
			$this->db->insert('transaksi_paket', $object);
		}

	
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */