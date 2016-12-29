<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
    }

	public function index()
	{
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_content';
        $isi['judul'] = 'Beranda';
        $isi['sub_judul'] = 'Selamat datang di Sistem Manajemen Kontrakan';
		$this->load->view('tampilan_home',$isi);  
        
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
