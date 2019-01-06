<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function getDataTransaksiMobil()
		{
			$this->db->select("id_transaksi_mobil,pilihan,nama_penyewa,no_hp,tgl_sewa,tgl_kembali,jml_hari,tujuan");
			$this->db->limit(10);
			$query = $this->db->get('transaksi_mobil');
			return $query->result();
		}

	public function getDataTransaksiBus()
		{
			$this->db->select("id_trans_bus_elf,pilihan,nama_penyewa,no_hp,tgl_sewa,tgl_kembali,jml_hari,tujuan");
			$this->db->limit(10);
			$query = $this->db->get('transaksi_bus_elf');
			return $query->result();
		}

	public function getDataTransaksiPariwisata()
		{
			$this->db->select("id_trans_paket,pilihan,nama_penyewa,no_hp,tgl_sewa,jml_hari");
			$this->db->limit(10);
			$query = $this->db->get('transaksi_paket');
			return $query->result();
		}

}

