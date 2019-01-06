<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_bus extends CI_Controller {



	public function index()
    {

        $this->load->model('transaksi_model');

        $data['transaksi_bus'] = $this->transaksi_model->getDataTransaksiBus();

        $this->load->view('admin/transaksi_bus',$data);
    }


}
    
	
 
 ?>

