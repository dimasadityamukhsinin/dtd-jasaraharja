<?php
defined('BASEPATH') or exit('No script access allowed');

class Total_data extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('kasubag_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Total Data
    public function index()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);
            $total_data = $this->data_model->listing();
            $data = array(  'title' =>  'Total Data',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_data'    =>  $total_data,
                            'isi'   =>  'kasubag/total_data/list'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Total Data 
    public function cetak()
    {
        if($this->session->userdata('level') == '2') {
            $total_data = $this->data_model->listing();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KENDARAAN PER NOPOL',
                            'total_data' =>  $total_data,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/total_data/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Data Selesai 
    public function cetak_data($id=null)
    {
        if (!isset($id)) show_404();
        
        if($this->session->userdata('level') == '2') {
            $cetak_data     = $this->data_model->detail($id);
            $gambar = $this->data_model->gambar($id);
            $kepalacabang = $this->kasubag_model->cek_laporan();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA '.$cetak_data->nopol,
                            'cetak_data' =>  $cetak_data,
                            'gambar'    =>  $gambar,
                            'kepalacabang'  =>  $kepalacabang,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/total_data/cetak_data', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '2') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KENDARAAN PER NOPOL BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/total_data/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_tp()
    {
        if($this->session->userdata('level') == '2') {
            $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
            $cetak_tp = $this->data_model->cetak_tp($tanggal_pelaksanaan);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KENDARAAN PER NOPOL BERDASARKAN TANGGAL PELAKSANAAN',
                            'cetak_tp' =>  $cetak_tp,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/total_data/cetak_tp', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>