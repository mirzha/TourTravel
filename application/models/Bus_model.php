<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_model extends CI_Model {

	public function getDataBus()
		{
			$this->db->select("id_bus_elf,jenis,kapasitas,biaya_sewa,status");
			$query = $this->db->get('bus_elf');
			return $query->result();
		}

	public function insertBus()
		{
			$object = array(
				'id_bus_elf' =>$this->input->post('id_bus_elf') ,
				'jenis' =>$this->input->post('jenis') ,
			 	'kapasitas' =>$this->input->post('kapasitas') ,
			 	'biaya_sewa' =>$this->input->post('biaya_sewa') ,
			 	'status' =>$this->input->post('status') 
				);
			$this->db->insert('bus_elf',$object); 
		}

	public function getDataById($id_bus_elf)
	{
		$this->db->where('id_bus_elf', $id_bus_elf);
		$query = $this->db->get('bus_elf');
		return $query->result();

	}

		function update($id_bus_elf)
	{
		$this->db->where('id_bus_elf', $id_bus_elf);
			   $object = array(
					
					'jenis' => $this->input->post('jenis'),
					'kapasitas' => $this->input->post('kapasitas'),
					'biaya_sewa' => $this->input->post('biaya_sewa'),
					'status' => $this->input->post('status')
					
				);

				$this->db->update('bus_elf', $object);     
			  
	}
	function delete($id_bus_elf)
	{
		$this->db->where('id_bus_elf', $id_bus_elf);
		$this->db->delete('bus_elf');
	}

}

