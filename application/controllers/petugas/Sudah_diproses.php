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
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Data Sudah Diproses
    public function index()
    {
        if($this->session->userdata('level') == '4') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);

            $regional = $this->session->userdata('regional');
            $sudah_diproses = $this->data_model->data_sudah_user($regional);
            $data = array(  'title' =>  'Menu Sudah Diproses',
                            'petugas' =>  $petugas,
                            'konfigurasi'   =>  $konfigurasi,
                            'sudah_diproses'    =>  $sudah_diproses,
                            'isi'   =>  'petugas/sudah_diproses/list'
                        );
            $this->load->view('petugas/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit Catatan
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '4') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);
            

            $regional = $this->regional_model->listing();

            //Ambil data yg akan diedit
            $sudah_diproses     = $this->data_model->detail_sudah($id);
            //validasi input
            $valid      = $this->form_validation;
            
            $valid->set_rules('nopol', 'Nomor Polisi', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('pemilik', 'Pemilik', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('alamat', 'Alamat', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('no_telpon', 'Nomor Telepon', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('kondisi', 'Kondisi', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('masa_awal', 'Masa Berlaku Awal', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('masa_akhir', 'Masa Berlaku Akhir', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('tarif', 'Tarif', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('regional', 'Regional', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('janji_bayar', 'Janji Bayar', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()===false){
                //Akhir Validasi
            
            $data = array(  'title'     =>  'Edit Sudah Diproses',
                            'sudah_diproses'   =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'petugas'    =>  $petugas,
                            'regional' => $regional,
                            'isi'       =>  'petugas/sudah_diproses/edit'
                        );
            $this->load->view('petugas/layout/wrapper', $data, false);
            
            if (!$sudah_diproses) show_404();
            
            //masuk database
            }else{
                $i = $this->input;
                $waktu = date("Y-m-d H:i");

                if($i->post('status') == 'Selesai') {
                    $data = array(  'id'  =>  $id,
                                    'nopol' =>  $i->post('nopol'),
                                    'pemilik'       =>  $i->post('pemilik'),
                                    'alamat'           =>  $i->post('alamat'),
                                    'no_telpon'           =>  $i->post('no_telpon'),
                                    'kondisi'           =>  $i->post('kondisi'),
                                    'status'           =>  $i->post('status'),
                                    'masa_awal'           =>  $i->post('masa_awal'),
                                    'masa_akhir'           =>  $i->post('masa_akhir'),
                                    'tarif'           =>  $i->post('tarif'),
                                    'regional'           =>  $i->post('regional'),
                                    'janji_bayar'           =>  $i->post('janji_bayar'),
                                    'tanggal_pelaksanaan'   =>  $waktu
                                );
                    $this->data_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Data telah diedit');
                    redirect(base_url('petugas/sudah_diproses'), 'refresh');
                }else{
                    $data = array(  'id'  =>  $id,
                                    'nopol' =>  $i->post('nopol'),
                                    'pemilik'       =>  $i->post('pemilik'),
                                    'alamat'           =>  $i->post('alamat'),
                                    'no_telpon'           =>  $i->post('no_telpon'),
                                    'kondisi'           =>  $i->post('kondisi'),
                                    'status'           =>  $i->post('status'),
                                    'masa_awal'           =>  $i->post('masa_awal'),
                                    'masa_akhir'           =>  $i->post('masa_akhir'),
                                    'tarif'           =>  $i->post('tarif'),
                                    'regional'           =>  $i->post('regional'),
                                    'janji_bayar'           =>  $i->post('janji_bayar'),
                                );
                    $this->data_model->edit($data);
                    $this->session->set_flashdata('sukses', 'Data telah diedit');
                    redirect(base_url('petugas/sudah_diproses'), 'refresh');
                }
            }
            //akhir masuk database
                
            $data = array(  'title'     =>  'Edit Sudah Diproses',
                            'sudah_diproses'   =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'petugas'    =>  $petugas,
                            'regional' => $regional,
                            'isi'       =>  'petugas/sudah_diproses/edit'
                        );
            $this->load->view('petugas/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Belum Diproses 
    public function cetak()
    {
        if($this->session->userdata('level') == '4') {
            $regional = $this->session->userdata('regional');
            $sudah_diproses = $this->data_model->data_sudah_user($regional);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DIPROSES',
                            'sudah_diproses' =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('petugas/sudah_diproses/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '4') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir_sudah_user($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DIPROSES BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('petugas/sudah_diproses/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>