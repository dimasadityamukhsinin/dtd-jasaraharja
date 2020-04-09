<?php
defined('BASEPATH') or exit('No script access allowed');

class Sudah_diproses extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('status_model');
        $this->load->model('regional_model');
        $this->load->library('excel');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Data On Progress
    public function index()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $sudah_diproses = $this->data_model->data_sudah();
            $data = array(  'title' =>  'Menu On Progress',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'sudah_diproses'    =>  $sudah_diproses,
                            'isi'   =>  'kepala_cabang/sudah_diproses/list'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Total Data On Progress
    public function total_sudah()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $total_sudah = $this->data_model->data_sudah();
            $data = array(  'title' =>  'Menu On Progress',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_sudah'    =>  $total_sudah,
                            'isi'   =>  'kepala_cabang/sudah_diproses/total_sudah'
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

            $pekanbaru = $this->data_model->data_sudah_pekanbaru();
            $data = array(  'title' =>  'Total On Progress Kota Pekanbaru',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'kepala_cabang/sudah_diproses/pekanbaru'
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

            $dumai = $this->data_model->data_sudah_dumai();
            $data = array(  'title' =>  'Total On Progress Kota Dumai',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'kepala_cabang/sudah_diproses/dumai'
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

            $siak = $this->data_model->data_sudah_siak();
            $data = array(  'title' =>  'Total On Progress Kota Siak',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'kepala_cabang/sudah_diproses/siak'
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

            $rohul = $this->data_model->data_sudah_rohul();
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'kepala_cabang/sudah_diproses/rohul'
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

            $rohil = $this->data_model->data_sudah_rohil();
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'kepala_cabang/sudah_diproses/rohil'
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

            $pelalawan = $this->data_model->data_sudah_pelalawan();
            $data = array(  'title' =>  'Total On Progress Kabupaten Pelalawan',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'kepala_cabang/sudah_diproses/pelalawan'
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

            $kuansing = $this->data_model->data_sudah_kuansing();
            $data = array(  'title' =>  'Total On Progress Kabupaten Kuantan Singingi',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'kepala_cabang/sudah_diproses/kuansing'
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

            $kampar = $this->data_model->data_sudah_kampar();
            $data = array(  'title' =>  'Total On Progress Kabupaten Kampar',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'kepala_cabang/sudah_diproses/kampar'
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

            $inhu = $this->data_model->data_sudah_inhu();
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'kepala_cabang/sudah_diproses/inhu'
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

            $inhil = $this->data_model->data_sudah_inhil();
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'kepala_cabang/sudah_diproses/inhil'
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

            $bengkalis = $this->data_model->data_sudah_bengkalis();
            $data = array(  'title' =>  'Total On Progress Kabupaten Bengkalis',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'kepala_cabang/sudah_diproses/bengkalis'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>