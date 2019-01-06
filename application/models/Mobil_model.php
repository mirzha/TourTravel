<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {

	public function getDataMobil()
		{
			$this->db->select("id_mobil,jenis_mobil,biaya_sewa,kapasitas,status");
			$query = $this->db->get('mobil');
			return $query->result();
		}

	public function insertMobil()
		{
			$object = array(
				'id_mobil' =>$this->input->post('id_mobil') ,
				'jenis_mobil' =>$this->input->post('jenis_mobil') ,
			 	'biaya_sewa' =>$this->input->post('biaya_sewa') ,
			 	'kapasitas' =>$this->input->post('kapasitas') ,
			 	'status' =>$this->input->post('status') 
				);
			$this->db->insert('mobil',$object); 
		}
	public function StatusMobil()
	{
		 $query = $this->db->query("SELECT id_mobil,jenis_mobil,biaya_sewa,kapasitas FROM mobil where status = 'ready'");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data)
            {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	public function count_avanza()
	{
			
		$query=$this->db->select('count(id_mobil) AS "count"',FALSE)
		->from('mobil')
		->where('jenis_mobil="Avanza" AND status="ready"')
		->get();
		
		$row =  $query->row_array();
		return $row['count'];
	}

	public function count_mobilio()
	{
			
		$query=$this->db->select('count(id_mobil) AS "count"',FALSE)
		->from('mobil')
		->where('jenis_mobil="Mobilio" AND status="ready"')
		->get();
		
		$row =  $query->row_array();
		return $row['count'];
	}

	public function count_innova()
	{
			
		$query=$this->db->select('count(id_mobil) AS "count"',FALSE)
		->from('mobil')
		->where('jenis_mobil="Inova" AND status="ready"')
		->get();
		
		$row =  $query->row_array();
		return $row['count'];
	}

	function getDataById($id_mobil)
	{
		$this->db->where('id_mobil', $id_mobil);
		$query = $this->db->get('mobil');
		return $query->result();

	}
	function update($id_mobil)
	{
		$this->db->where('id_mobil', $id_mobil);
			   $object = array(
					
					'jenis_mobil' => $this->input->post('jenis_mobil'),
					'biaya_sewa' => $this->input->post('biaya_sewa'),
					'kapasitas' => $this->input->post('kapasitas'),
					//'no_telepon' => $this->input->post('no_telepon'),
					'status' => $this->input->post('status'),
					//'tanggal_masuk' => $this->input->post('tanggal_masuk'),					
				);

				$this->db->update('mobil', $object);     
			  
	}
	function delete($id_mobil)
	{
		$this->db->where('id_mobil', $id_mobil);
		$this->db->delete('mobil');
	}

}

/* End of file kembali_model.php */
/* Location: ./application/models/kembali_model.php */