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

    // Data Anggaran Samsat
    public function index()
    {
		$tahun = $this->input->post('tahun');

		$thn = '';
		if($tahun == ''){
			$thn = date('Y');
		}else{
			$thn = $tahun;
		}

		$anggaran = $this->samsat_model->getAnggaranIW($thn);
        $tahunAnggaran = $this->samsat_model->tahun_anggaran();
        
        $konfigurasi = $this->konfigurasi_model->listing();
        $username = $this->session->userdata('username');
        $admin = $this->user_model->listing($username);

        $data = array(  'title'         =>  'Anggaran Tahunan Samsat',
                        'admin'         =>  $admin,
                        'konfigurasi'   =>  $konfigurasi,
                        'anggaran'      =>  $anggaran,
                        'tahunAnggaran' =>  $tahunAnggaran,
                        'tahun'         => $thn,
                        'isi'           =>  'admin/anggaran_samsat/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, false);
    }
}
?>