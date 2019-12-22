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
        $total_data = $this->data_model->total_data();
        echo json_encode($total_data);
    }

    function get_belum(){
        $belum_diproses = $this->data_model->belum_diproses();
        echo json_encode($belum_diproses);
    }

    function get_sudah(){
        $sudah_diproses = $this->data_model->sudah_diproses();
        echo json_encode($sudah_diproses);
    }

    function get_selesai(){
        $selesai = $this->data_model->selesai();
        echo json_encode($selesai);
    }

    // Halaman Dashboard
    public function index()
    {
        if($this->session->userdata('level') == '2') {
            $total_data = $this->data_model->total_data();
            $belum_diproses = $this->data_model->belum_diproses();
            $sudah_diproses = $this->data_model->sudah_diproses();
            $selesai = $this->data_model->selesai();
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            //Data Pekanbaru
            $belum_pekanbaru = $this->data_model->belum_diproses_pekanbaru();
            $sudah_pekanbaru = $this->data_model->sudah_diproses_pekanbaru();
            $selesai_pekanbaru = $this->data_model->selesai_pekanbaru();

            //Data Dumai
            $belum_dumai = $this->data_model->belum_diproses_dumai();
            $sudah_dumai = $this->data_model->sudah_diproses_dumai();
            $selesai_dumai = $this->data_model->selesai_dumai();

            //Data Siak
            $belum_siak = $this->data_model->belum_diproses_siak();
            $sudah_siak = $this->data_model->sudah_diproses_siak();
            $selesai_siak = $this->data_model->selesai_siak();

            //Data Rohul
            $belum_rohul = $this->data_model->belum_diproses_rohul();
            $sudah_rohul = $this->data_model->sudah_diproses_rohul();
            $selesai_rohul = $this->data_model->selesai_rohul();

            //Data Rohil
            $belum_rohil = $this->data_model->belum_diproses_rohil();
            $sudah_rohil = $this->data_model->sudah_diproses_rohil();
            $selesai_rohil = $this->data_model->selesai_rohil();

            //Data Pelalawan
            $belum_pelalawan = $this->data_model->belum_diproses_pelalawan();
            $sudah_pelalawan = $this->data_model->sudah_diproses_pelalawan();
            $selesai_pelalawan = $this->data_model->selesai_pelalawan();

            //Data Kuansing
            $belum_kuansing = $this->data_model->belum_diproses_kuansing();
            $sudah_kuansing = $this->data_model->sudah_diproses_kuansing();
            $selesai_kuansing = $this->data_model->selesai_kuansing();

            //Data Meranti
            $belum_meranti = $this->data_model->belum_diproses_meranti();
            $sudah_meranti = $this->data_model->sudah_diproses_meranti();
            $selesai_meranti = $this->data_model->selesai_meranti();

            //Data Kampar
            $belum_kampar = $this->data_model->belum_diproses_kampar();
            $sudah_kampar = $this->data_model->sudah_diproses_kampar();
            $selesai_kampar = $this->data_model->selesai_kampar();

            //Data Inhu
            $belum_inhu = $this->data_model->belum_diproses_inhu();
            $sudah_inhu = $this->data_model->sudah_diproses_inhu();
            $selesai_inhu = $this->data_model->selesai_inhu();

            // Data Inhil
            $belum_inhil = $this->data_model->belum_diproses_inhil();
            $sudah_inhil = $this->data_model->sudah_diproses_inhil();
            $selesai_inhil = $this->data_model->selesai_inhil();

            // Data Bengkalis
            $belum_bengkalis = $this->data_model->belum_diproses_bengkalis();
            $sudah_bengkalis = $this->data_model->sudah_diproses_bengkalis();
            $selesai_bengkalis = $this->data_model->selesai_bengkalis();

            $data = array(  'title' => 'Halaman Kasubag',
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'belum_diproses'    =>  $belum_diproses,
                            'sudah_diproses' => $sudah_diproses,
                            'selesai'    =>  $selesai,
                            'total_data' => $total_data,
                            // Data Pekanbaru
                            'belum_pekanbaru'   =>  $belum_pekanbaru,
                            'sudah_pekanbaru'   =>  $sudah_pekanbaru,
                            'selesai_pekanbaru'   =>  $selesai_pekanbaru,
                            // Data Dumai
                            'belum_dumai'   =>  $belum_dumai,
                            'sudah_dumai'   =>  $sudah_dumai,
                            'selesai_dumai'   =>  $selesai_dumai,
                            // Data Siak
                            'belum_siak'    =>  $belum_siak,
                            'sudah_siak'    =>  $sudah_siak,
                            'selesai_siak'    =>  $selesai_siak,
                            // Data Rohul
                            'belum_rohul'   =>  $belum_rohul,
                            'sudah_rohul'   =>  $sudah_rohul,
                            'selesai_rohul'   =>  $selesai_rohul,
                            // Data Rohil
                            'belum_rohil'   =>  $belum_rohil,
                            'sudah_rohil'   =>  $sudah_rohil,
                            'selesai_rohil'   =>  $selesai_rohil,
                            // Data Pelalawan
                            'belum_pelalawan'   =>  $belum_pelalawan,
                            'sudah_pelalawan'   =>  $sudah_pelalawan,
                            'selesai_pelalawan'   =>  $selesai_pelalawan,
                            // Data Kuansing
                            'belum_kuansing'    =>  $belum_kuansing,
                            'sudah_kuansing'    =>  $sudah_kuansing,
                            'selesai_kuansing'    =>  $selesai_kuansing,
                            // Data Meranti
                            'belum_meranti' =>  $belum_meranti,
                            'sudah_meranti' =>  $sudah_meranti,
                            'selesai_meranti' =>  $selesai_meranti,
                            // Data Kampar
                            'belum_kampar'  =>  $belum_kampar,
                            'sudah_kampar'  =>  $sudah_kampar,
                            'selesai_kampar'  =>  $selesai_kampar,
                            // Data Inhu
                            'belum_inhu'    =>  $belum_inhu,
                            'sudah_inhu'    =>  $sudah_inhu,
                            'selesai_inhu'    =>  $selesai_inhu,
                            // Data Inhil
                            'belum_inhil'   =>  $belum_inhil,
                            'sudah_inhil'   =>  $sudah_inhil,
                            'selesai_inhil'   =>  $selesai_inhil,
                            // Data Bengkalis
                            'belum_bengkalis'   =>  $belum_bengkalis,
                            'sudah_bengkalis'   =>  $sudah_bengkalis,
                            'selesai_bengkalis'   =>  $selesai_bengkalis,
                            'isi'   => 'kasubag/dashboard/list');
            $this->load->view('kasubag/layout/wrapper', $data, FALSE);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>