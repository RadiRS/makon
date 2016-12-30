<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

    public function __construct(){
        //session_start();
    }

	public function getlogin($u,$p)
    {
        $pwd = md5($p);
        $this->db->where('USERNAME',$u);
        $this->db->where('PASSWORD',$pwd);
        $query = $this->db->get('TBL_USER');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array('nama_lengkap_user' => $row->NAMA_LENGKAP_USER,
                              'username' => $row->USERNAME,
                              'email_user' => $row->EMAIL_USER,
                              'hakakses_user' => $row->HAKAKSES_USER );
                $this->session->set_userdata($sess);
                redirect('home');                
            }
            
        }
        else {
            $this->session->set_flashdata('info','Maaf username atau password salah');
            redirect('login');
        }

    }

}
