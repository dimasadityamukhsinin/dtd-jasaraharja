<?php
defined('BASEPATH') or exit('No script access allowed');

class Anggaran_samsat extends CI_Controller {

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
        $anggaran = $this->samsat_model->listing();

        $data = array(  'title'         =>  'Anggaran Tahunan Samsat',
                        'konfigurasi'   =>  $konfigurasi,
                        'admin'         =>  $admin,
                        'anggaran'      =>  $anggaran,
                        'isi'           =>  'admin/anggaran_samsat/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
?>