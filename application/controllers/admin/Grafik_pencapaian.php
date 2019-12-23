<?php
defined('BASEPATH') or exit('No script access allowed');

class Grafik_pencapaian extends CI_Controller {

    //Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->load->model('user_model');
        $this->load->model('samsat_model');
        //Proteksi Halaman
        $this->simple_login->cek_login();
        if($this->session->userdata('level') != '1') {
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function index()
    {
        $konfigurasi = $this->konfigurasi_model->listing();
        $username = $this->session->userdata('username');
        $admin = $this->user_model->listing($username);

        $data = array(  'title'         =>  'Grafik Pencapaian Samsat',
                        'konfigurasi'   =>  $konfigurasi,
                        'admin'         =>  $admin,
                        'isi'           =>  'admin/grafik_pencapaian/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
?>