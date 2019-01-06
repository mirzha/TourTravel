<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_mobil extends CI_Controller {



	public function index()
    {

        $this->load->model('transaksi_model');

        $data['transaksi_mobil'] = $this->transaksi_model->getDataTransaksiMobil();

        $this->load->view('admin/transaksi_mobil',$data);
    }


}
    
	
   
	

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>

