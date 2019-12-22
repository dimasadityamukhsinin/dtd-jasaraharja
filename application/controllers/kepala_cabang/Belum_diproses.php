<?php
defined('BASEPATH') or exit('No script access allowed');

class Belum_diproses extends CI_Controller {

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

    // Data Belum Diproses
    public function index()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $belum_diproses = $this->data_model->data_belum();
            $data = array(  'title' =>  'Menu Belum Diproses',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'belum_diproses'    =>  $belum_diproses,
                            'isi'   =>  'kepala_cabang/belum_diproses/list'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Total Data Belum Diproses
    public function total_belum()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $total_belum = $this->data_model->data_belum();
            $data = array(  'title' =>  'Menu Belum Diproses',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_belum'    =>  $total_belum,
                            'isi'   =>  'kepala_cabang/belum_diproses/total_belum'
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

            $pekanbaru = $this->data_model->data_belum_pekanbaru();
            $data = array(  'title' =>  'Total Belum Diproses Kota Pekanbaru',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'kepala_cabang/belum_diproses/pekanbaru'
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

            $dumai = $this->data_model->data_belum_dumai();
            $data = array(  'title' =>  'Total Belum Diproses Kota Dumai',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'kepala_cabang/belum_diproses/dumai'
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

            $siak = $this->data_model->data_belum_siak();
            $data = array(  'title' =>  'Total Belum Diproses Kota Siak',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'kepala_cabang/belum_diproses/siak'
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

            $rohul = $this->data_model->data_belum_rohul();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Rokan Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'kepala_cabang/belum_diproses/rohul'
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

            $rohil = $this->data_model->data_belum_rohil();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Rokan Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'kepala_cabang/belum_diproses/rohil'
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

            $pelalawan = $this->data_model->data_belum_pelalawan();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Pelalawan',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'kepala_cabang/belum_diproses/pelalawan'
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

            $kuansing = $this->data_model->data_belum_kuansing();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kuantan Singingi',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'kepala_cabang/belum_diproses/kuansing'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Meranti
    public function meranti()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $meranti = $this->data_model->data_belum_meranti();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kepulauan Meranti',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'meranti'    =>  $meranti,
                            'isi'   =>  'kepala_cabang/belum_diproses/meranti'
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

            $kampar = $this->data_model->data_belum_kampar();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kampar',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'kepala_cabang/belum_diproses/kampar'
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

            $inhu = $this->data_model->data_belum_inhu();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Indragiri Hulu',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'kepala_cabang/belum_diproses/inhu'
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

            $inhil = $this->data_model->data_belum_inhil();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Indragiri Hilir',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'kepala_cabang/belum_diproses/inhil'
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

            $bengkalis = $this->data_model->data_belum_bengkalis();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Bengkalis',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'kepala_cabang/belum_diproses/bengkalis'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>