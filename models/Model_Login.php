<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

    public function __construct(){
        //session_start();
    }

	public function getlogin($u,$p)
    {
        $pwd = md5($p);
        $this->db->where('nama_user',$u);
        $this->db->where('password_user',$pwd);
        $query = $this->db->get('TBL_USER');
        if ($query->num_rows()>0) {
            foreach ($query->result() as $row) {
                $sess = array('nama_user' => $row->nama_user,
                              'email_user' => $row->email_user,
                              'hakakses_user' => $row->hakakses_user );
                $this->session->set_userdata($sess);
                redirect('home');
            }
        }
        else {
            $this->session->set_flashdata('info','Maaf nama user atau password salah');
            redirect('login');
        }

    }

}
