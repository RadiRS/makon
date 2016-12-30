<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sequrity extends CI_model {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

    public function getsequrity(){
        $username = $this->session->userdata('username');
        if(empty($username)){
            $this->session->sess_destroy();
            redirect('login');
        }
        
    }

}
