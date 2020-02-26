<?php
defined('BASEPATH') or exit('No script access allowed');

class Selesai extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('regional_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Data Tahun Ajaran
    public function index()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);
            $selesai = $this->data_model->data_selesai();
            $data = array(  'title' =>  'Menu Selesai ',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'selesai'    =>  $selesai,
                            'isi'   =>  'kepala_cabang/selesai/list'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Total Data Selesai
    public function total_selesai()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $selesai = $this->data_model->data_selesai();
            $data = array(  'title' =>  'Total Selesai',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'selesai'    =>  $selesai,
                            'isi'   =>  'kepala_cabang/selesai/total_selesai'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pekanbaru
    public function pekanbaru()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $pekanbaru = $this->data_model->data_selesai_pekanbaru();
            $data = array(  'title' =>  'Total Selesai Kota Pekanbaru',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'kepala_cabang/selesai/pekanbaru'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Dumai
    public function dumai()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $dumai = $this->data_model->data_selesai_dumai();
            $data = array(  'title' =>  'Total Selesai Kota Dumai',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'kepala_cabang/selesai/dumai'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Siak
    public function siak()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $siak = $this->data_model->data_selesai_siak();
            $data = array(  'title' =>  'Total Selesai Kota Siak',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'kepala_cabang/selesai/siak'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohul
    public function rohul()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $rohul = $this->data_model->data_selesai_rohul();
            $data = array(  'title' =>  'Total Selesai Kabupaten Rokan Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'kepala_cabang/selesai/rohul'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohil
    public function rohil()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $rohil = $this->data_model->data_selesai_rohil();
            $data = array(  'title' =>  'Total Selesai Kabupaten Rokan Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'kepala_cabang/selesai/rohil'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pelalawan
    public function pelalawan()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $pelalawan = $this->data_model->data_selesai_pelalawan();
            $data = array(  'title' =>  'Total Selesai Diproses Kabupaten Pelalawan',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'kepala_cabang/selesai/pelalawan'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Kuansing
    public function kuansing()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $kuansing = $this->data_model->data_selesai_kuansing();
            $data = array(  'title' =>  'Total Selesai Kabupaten Kuantan Singingi',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'kepala_cabang/selesai/kuansing'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Kampar
    public function kampar()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $kampar = $this->data_model->data_selesai_kampar();
            $data = array(  'title' =>  'Total Selesai Kabupaten Kampar',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'kepala_cabang/selesai/kampar'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhu
    public function inhu()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $inhu = $this->data_model->data_selesai_inhu();
            $data = array(  'title' =>  'Total Selesai Kabupaten Indragiri Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'kepala_cabang/selesai/inhu'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhil
    public function inhil()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $inhil = $this->data_model->data_selesai_inhil();
            $data = array(  'title' =>  'Total Selesai Kabupaten Indragiri Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'kepala_cabang/selesai/inhil'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Bengkalis
    public function bengkalis()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $bengkalis = $this->data_model->data_selesai_bengkalis();
            $data = array(  'title' =>  'Total Selesai Kabupaten Bengkalis',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'kepala_cabang/selesai/bengkalis'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>