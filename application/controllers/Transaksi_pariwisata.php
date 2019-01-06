<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_pariwisata extends CI_Controller {



	public function index()
    {

        $this->load->model('transaksi_model');

        $data['transaksi_pariwisata'] = $this->transaksi_model->getDataTransaksiPariwisata();

        $this->load->view('admin/transaksi_pariwisata',$data);
    }


}
    
	
   
	

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>

