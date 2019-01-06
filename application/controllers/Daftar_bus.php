<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_bus extends CI_Controller {



	public function index()
    {

        $this->load->model('Bus_model');

        $data['bus'] = $this->Bus_model->getDataBus();

        $this->load->view('admin/daftar_bus',$data);
    }


    


    public  function Update($id_jadwal)
    {
        $this->load->helper('url','form');  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
         $this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
        //sebelum update data harus ambil data lama yang akan di update
          $this->load->model('travel_model');    
        if($this->form_validation->run()==FALSE){
           $data['jadwal_travel']=$this->travel_model->getDataJadwalById($id_jadwal);
           $this->load->view('edit_jadwal_view',$data);
        }else{
            $this->travel_model->updateJadwalById();
            $this->load->view('tambah_data_kendaraan_travel_sukses');
        }

    }
    
      public function create()
    {
        
        $this->load->helper('url','form');  
        $this->load->library('form_validation');
        $this->form_validation->set_rules('jenis', 'jenis bus', 'trim|required');
        $this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
        $this->load->model('Bus_model');
        $this->load->view("admin/tambah_data_bus");   
        if($this->form_validation->run()==FALSE){
        }else{
            $this->Bus_model->insertBus();
            $this->load->view('admin/tambah_data_bus_sukses');
        }
        
    }  
    
        
    }

    
	
   
	

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>

