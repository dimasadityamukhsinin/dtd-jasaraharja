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

<<<<<<< HEAD
    // Data On Progress
=======
    // Data Sudah Diproses
>>>>>>> a
    public function index()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $sudah_diproses = $this->data_model->data_sudah();
<<<<<<< HEAD
            $data = array(  'title' =>  'Menu On Progress',
=======
            $data = array(  'title' =>  'Menu Sudah Diproses',
>>>>>>> a
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

<<<<<<< HEAD
    // Total Data On Progress
=======
    // Total Data Sudah Diproses
>>>>>>> a
    public function total_sudah()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $total_sudah = $this->data_model->data_sudah();
<<<<<<< HEAD
            $data = array(  'title' =>  'Menu On Progress',
=======
            $data = array(  'title' =>  'Menu Sudah Diproses',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Pekanbaru',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Pekanbaru',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Dumai',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Dumai',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Siak',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Siak',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hulu',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Rokan Hulu',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hilir',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Rokan Hilir',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Pelalawan',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Pelalawan',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Kuantan Singingi',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kuantan Singingi',
>>>>>>> a
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

<<<<<<< HEAD
=======
    // Data Meranti
    public function meranti()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $meranti = $this->data_model->data_sudah_meranti();
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kepulauan Meranti',
                            'kepala_cabang' =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'meranti'    =>  $meranti,
                            'isi'   =>  'kepala_cabang/sudah_diproses/meranti'
                        );
            $this->load->view('kepala_cabang/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

>>>>>>> a
    // Data Kampar
    public function kampar()
    {
        if($this->session->userdata('level') == '5') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kepala_cabang = $this->user_model->listing($username);

            $kampar = $this->data_model->data_sudah_kampar();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Kampar',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kampar',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hulu',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Indragiri Hulu',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hilir',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Indragiri Hilir',
>>>>>>> a
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
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Bengkalis',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Bengkalis',
>>>>>>> a
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