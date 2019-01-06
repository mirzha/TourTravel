<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_mobil extends CI_Controller {



	public function index()
    {

        $this->load->model('mobil_model');

        $data['mobil'] = $this->mobil_model->getDataMobil();
        

        $this->load->view('admin/daftar_mobil',$data);
    }


    public function create()
    {
        
        $this->load->helper('url','form');  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis_mobil', 'Nama Penyewa', 'trim|required');
        $this->form_validation->set_rules('biaya_sewa', 'biaya_sewa', 'trim|required');
        $this->load->model('Mobil_model');
        $this->load->view("admin/tambah_data_mobil");   
        if($this->form_validation->run()==FALSE){
        }else{
            $this->Mobil_model->insertMobil();
            $this->load->view('admin/tambah_data_mobil_sukses');
        }
        
    }




}
    

 ?>

