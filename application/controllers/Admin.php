<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	   public function __construct(){
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('login');
        }elseif($this->session->userdata('level') == 'member'){
            redirect('data_penumpang');
        }
    }
 
    public function index() {
        $data = array(
                    'error' => '',
                    'username' => $this->session->userdata('username')
                );
        $this->load->view('admin/home', $data);
    }
 
    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }

}
 ?>

