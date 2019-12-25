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
        if($this->session->userdata('level') == '5') {
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);
            $profile = $this->profile_model->listing($username);
            $samsat = $this->samsat_model->samsat();

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('nama', 'Nama Kepala Cabang', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Profile',
                                'profile'       => $profile,
                                'konfigurasi'   =>  $konfigurasi,
                                'kepala_cabang' =>  $kepala_cabang,
                                'samsat'        =>  $samsat,
                                'isi'           => 'kepala_cabang/profile/list'  );
                $this->load->view('kepala_cabang/layout/wrapper',$data,FALSE);
                // Masuk Database
            }else{
                $i = $this->input;

                $data = array(
                    'username'     =>  $username,
                    'nama'     =>  $i->post('nama'),
                    'cabang'     =>  $i->post('cabang'),
                    'alamat'     =>  $i->post('alamat'),
                    'no_telpon'     =>  $i->post('no_telpon'),
                );
                $this->profile_model->edit($data);
                $this->session->set_flashdata('sukses','Data telah diupdate');
                redirect(base_url('kepala_cabang/profile'),'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Profile
    public function password()
    {
        if($this->session->userdata('level') == '5') {
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);
            $profile = $this->profile_model->listing($username);

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('pw_lama', 'Password Lama', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('pw_baru', 'Password Baru', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Profile',
                                'profile'       => $profile,
                                'konfigurasi'   =>  $konfigurasi,
                                'kepala_cabang'         =>  $kepala_cabang,
                                'isi'           => 'kepala_cabang/profile/password'  );
                $this->load->view('kepala_cabang/layout/wrapper',$data,FALSE);
                // Masuk Database
            }else{
                $i = $this->input;

                $cek_old = $this->profile_model->cek_old();
                if ($cek_old == False){
                    $this->session->set_flashdata('warning','Password lama tidak cocok!' );
                    redirect(base_url('kepala_cabang/profile/password'),'refresh');
                }else{
                    $pass = md5($this->input->post('pw_baru'));
                    $data = array (
                        'username' =>  $username, 
                        'password'  => $pass,
                    );
                    $this->profile_model->save($data);
                    $this->session->set_flashdata('sukses','Sukses merubah password!' );
                    redirect(base_url('kepala_cabang/profile/password'),'refresh');
                }//end if valid_user
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

}
?>