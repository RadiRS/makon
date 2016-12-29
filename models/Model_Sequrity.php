<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sequrity extends CI_model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getsequrity(){
        $namauser = $this->session->userdata('nama_user');
        if(empty($namauser)){
            $this->session->sess_destroy();
            redirect('login');
        }
        
    }

}
