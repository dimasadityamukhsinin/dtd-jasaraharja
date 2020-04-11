<?php
defined('BASEPATH') or exit('No script access allowed');

class Total_data extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('datakapal_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('kasubag_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Total Data
    public function index()
    {
        if($this->session->userdata('level') == '1') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);
            $total_data = $this->datakapal_model->listing();
            $data = array(  'title' =>  'Total Data',
                            'admin' =>  $admin,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_data'    =>  $total_data,
                            'isi'   =>  'admin/kapal/total_data/list'
                        );
            $this->load->view('admin/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '1') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->datakapal_model->cetak_akhir($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KAPAL LAUT BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('admin/kapal/total_data/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_tp()
    {
        if($this->session->userdata('level') == '1') {
            $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
            $cetak_tp = $this->datakapal_model->cetak_tp($tanggal_pelaksanaan);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KAPAL LAUT BERDASARKAN TANGGAL PELAKSANAAN',
                            'cetak_tp' =>  $cetak_tp,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('admin/kapal/total_data/cetak_tp', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Total Data 
    public function cetak()
    {
        if($this->session->userdata('level') == '1') {
            $total_data = $this->datakapal_model->listing();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'LAPORAN DATA OUTSTANDING KAPAL LAUT',
                            'total_data' =>  $total_data,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('admin/kapal/total_data/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Data Selesai 
    public function cetak_data($id=null)
    {
        if (!isset($id)) show_404();
        
        if($this->session->userdata('level') == '1') {
            $cetak_data     = $this->datakapal_model->detail($id);
            $gambar = $this->datakapal_model->gambar($id);
            $kepalacabang = $this->kasubag_model->cek_laporan();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA '.$cetak_data->nama_perusahaan,
                            'cetak_data' =>  $cetak_data,
                            'gambar'    =>  $gambar,
                            'kepalacabang'  =>  $kepalacabang,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('admin/kapal/total_data/cetak_data', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Duplikat
    public function hapus_duplikat()
    {
        
        if($this->session->userdata('level') == '1') {
            
            require_once(APPPATH.'views/vendor/autoload.php');
            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
            );
            $pusher = new Pusher\Pusher(
                'c451a8fcd656194f0e5b', //ganti dengan App_key pusher Anda
                '8530a44ac5725f910579', //ganti dengan App_secret pusher Anda
                '921567', //ganti dengan App_key pusher Anda
                $options
            );
            $pusher->trigger('my-channel', 'my-event', array('message' => 'success'));

            $this->datakapal_model->delete_duplikat();
            $this->session->set_flashdata('sukses', 'Data telah dihapus');
            redirect(base_url('admin/kapal/total_data'), 'refresh');
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>