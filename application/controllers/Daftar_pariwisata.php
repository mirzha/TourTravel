<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pariwisata extends CI_Controller {



	public function index()
    {

        $this->load->model('Pariwisata_model');

        $data['pariwisata'] = $this->Pariwisata_model->getDataPariwisata();

        $this->load->view('admin/daftar_pariwisata',$data);
    }


     public function create()
    {
        
        $this->load->helper('url','form');  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_paket', 'Nama Paket', 'trim|required');
        $this->form_validation->set_rules('biaya_paket', 'biaya_paket', 'trim|required');
        $this->load->model('Pariwisata_model');
        $this->load->view("admin/tambah_data_pariwisata");   
        if($this->form_validation->run()==FALSE){
        }else{
            $this->Pariwisata_model->insertPariwisata();
            $this->load->view('admin/tambah_data_pariwisata_sukses');
        }
        
    }

    }

    
	
   
	

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>

