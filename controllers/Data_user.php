<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {

    //Meload model_data yg diperlukan
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Sequrity');
        $this->load->model('Model_data_user');
    }

    //fungsi yg dijalankan pertama kali saat menu diklik
	public function index()
	{
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_data_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = '';
        $isi['list'] = $this->Model_data_user->get_all();
        $this->load->view('tampilan_home',$isi);         
        
	}

    //fungsi untuk menampilkan form penambahan data baru user
    public function add_user()
    {
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_add_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = 'Menambahkan user baru';
        $this->load->view('tampilan_home',$isi);  
    }

    //funsi untuk melakukan aksi tambah data
    public function insert_action()
    {
        
        $nama = $this->input->post('nama'); 
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hak_akses = $this->input->post('hak_akses');
        $data = array(
            'NAMA_LENGKAP_USER' => $nama,
            'EMAIL_USER' => $email,
            'USERNAME' => $username,
            'PASSWORD' => md5($password),
            'HAKAKSES_USER' => $hak_akses
        );
        
        $this->Model_data_user->insert($data);
        
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_data_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = '';
        $isi['list'] = $this->Model_data_user->get_all();
        $this->load->view('tampilan_home',$isi);  
          
    }

    //fungsi untuk menampilkan data yang akan dirubah pada form update
    public function update_user($id_user)
    {
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_update_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = 'Menambahkan user baru';
        $isi['list'] = $this->Model_data_user->get_one($id_user);

        $this->load->view('tampilan_home',$isi);  
    }

    //fungsi untuk melakukan aksi update data user
    public function update_action($id_user)
    {        
        $nama = $this->input->post('nama'); 
        $email = $this->input->post('email'); 
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hak_akses = $this->input->post('hak_akses');
        $data = array(
            'NAMA_LENGKAP_USER' => $nama,
            'EMAIL_USER' => $email,
            'USERNAME' => $username,
            'PASSWORD' => md5($password),
            'HAKAKSES_USER' => $hak_akses
        );
        
        $this->Model_data_user->update($data,$id_user);       
        
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_data_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = '';
        $isi['list'] = $this->Model_data_user->get_all();
        $this->load->view('tampilan_home',$isi);  
          
    }

    //fungsi untuk melakukan aksi hapus user
    public function delete_user($id_user)
    {
        $this->Model_data_user->delete($id_user);
        
        
        $this->Model_Sequrity->getsequrity();
        $isi['content'] = 'tampilan_data_user';
        $isi['judul'] = 'Data User';
        $isi['sub_judul'] = '';
        $isi['list'] = $this->Model_data_user->get_all();
        $this->load->view('tampilan_home',$isi);  
    }

    //fungsi untuk mencari data user ==> Belum Fix
    function get($keyword='')
    {
        $this->load->model('searchajax_model');
        echo json_encode($this->Model_data_user->get($keyword));
    }

   




}
