<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profile_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('level_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    public function index()
    {
        if($this->session->userdata('level') == '1') {
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);
            $profile = $this->profile_model->listing($username);

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('nama', 'Nama Admin', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Profile',
                                'profile'       => $profile,
                                'konfigurasi'   =>  $konfigurasi,
                                'admin'         =>  $admin,
                                'isi'           => 'admin/profile/list'  );
                $this->load->view('admin/layout/wrapper',$data,FALSE);
                // Masuk Database
            }else{
                $i = $this->input;

                $data = array(
                    'username'     =>  $profile->username,
                    'nama'     =>  $i->post('nama'),
                );
                $this->profile_model->edit($data);
                $this->session->set_flashdata('sukses','Data telah diupdate');
                redirect(base_url('admin/profile'),'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Profile
    public function password()
    {
        if($this->session->userdata('level') == '1') {
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('pw_baru', 'Password Baru', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Profile',
                                'konfigurasi'   =>  $konfigurasi,
                                'admin'         =>  $admin,
                                'isi'           => 'admin/profile/password'  );
                $this->load->view('admin/layout/wrapper',$data,FALSE);
                // Masuk Database
            }else{
                $pass = md5($this->input->post('pw_baru'));
                $data = array (
                    'username' =>  $username, 
                    'password'  => $pass,
                );
                $this->profile_model->save($data);
                $this->session->set_flashdata('sukses','Sukses merubah password!' );
                redirect(base_url('admin/profle/password'),'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

}
?>