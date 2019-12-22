<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->load->model('user_model');
        $this->load->model('data_model');
        $this->load->model('log_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }
    
    function get_total(){
        $regional = $this->session->userdata('regional');
        $total_data = $this->data_model->total_data_user($regional);
        echo json_encode($total_data);
    }

    function get_belum(){
        $regional = $this->session->userdata('regional');
        $belum_diproses = $this->data_model->belum_diproses_user($regional);
        echo json_encode($belum_diproses);
    }

    function get_sudah(){
        $regional = $this->session->userdata('regional');
        $sudah_diproses = $this->data_model->sudah_diproses_user($regional);
        echo json_encode($sudah_diproses);
    }

    function get_selesai(){
        $regional = $this->session->userdata('regional');
        $selesai = $this->data_model->selesai_user($regional);
        echo json_encode($selesai);
    }

    function get_regional(){
        $regional = $this->session->userdata('regional');
        $sudah_diproses = $this->data_model->sudah_diproses_user($regional);
        $belum_diproses = $this->data_model->belum_diproses_user($regional);
        $selesai = $this->data_model->selesai_user($regional);
        echo json_encode(['sudah_diproses' => $sudah_diproses,
                          'belum_diproses' => $belum_diproses,
                          'selesai' => $selesai
                        ]);
    }

    // Halaman Dashboard
    public function index()
    {
        if($this->session->userdata('level') == '4') {
            $regional = $this->session->userdata('regional');
            $total_data = $this->data_model->total_data_user($regional);
            $sudah_diproses = $this->data_model->sudah_diproses_user($regional);
            $belum_diproses = $this->data_model->belum_diproses_user($regional);
            $selesai = $this->data_model->selesai_user($regional);
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);

            $data = array(  'title' => 'Halaman Petugas',
                            'konfigurasi'   =>  $konfigurasi,
                            'petugas'    =>  $petugas,
                            'belum_diproses'    =>  $belum_diproses,
                            'sudah_diproses'    =>  $sudah_diproses,
                            'selesai'    =>  $selesai,
                            'total_data'    =>  $total_data,
                            'isi'   => 'petugas/dashboard/list');
            $this->load->view('petugas/layout/wrapper', $data, FALSE);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>