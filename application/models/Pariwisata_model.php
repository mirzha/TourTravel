<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pariwisata_model extends CI_Model {

	public function getDataPariwisata()
		{
			$this->db->select("id_paket_wisata,nama_paket,biaya_paket,kapasitas");
			$query = $this->db->get('paket_wisata');
			return $query->result();
		}

	public function insertPariwisata()
		{
			$object = array(
				'id_paket_wisata' =>$this->input->post('id_paket_wisata') ,
				'nama_paket' =>$this->input->post('nama_paket') ,
			 	'biaya_paket' =>$this->input->post('biaya_paket') ,
			 	'kapasitas' =>$this->input->post('kapasitas') 
				);
			$this->db->insert('paket_wisata',$object); 
		}

	function getDataById($id_paket_wisata)
	{
		$this->db->where('id_paket_wisata', $id_paket_wisata);
		$query = $this->db->get('paket_wisata');
		return $query->result();

	}
	function update($id_paket_wisata)
	{
		$this->db->where('id_paket_wisata', $id_paket_wisata);
			   $object = array(
					
					'nama_paket' => $this->input->post('nama_paket'),
					'biaya_paket' => $this->input->post('biaya_paket'),
					'kapasitas' => $this->input->post('kapasitas'),
							
				);

				$this->db->update('paket_wisata', $object);     
			  
	}
	function delete($id_paket_wisata)
	{
		$this->db->where('id_paket_wisata', $id_paket_wisata);
		$this->db->delete('paket_wisata');
	}
}

