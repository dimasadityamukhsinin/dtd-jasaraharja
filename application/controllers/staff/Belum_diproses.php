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
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $belum_diproses = $this->data_model->data_belum();
            $data = array(  'title' =>  'Menu Belum Diproses',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'belum_diproses'    =>  $belum_diproses,
                            'isi'   =>  'staff/belum_diproses/list'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Total Data Belum Diproses
    public function total_belum()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $total_belum = $this->data_model->data_belum();
            $data = array(  'title' =>  'Menu Belum Diproses',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_belum'    =>  $total_belum,
                            'isi'   =>  'staff/belum_diproses/total_belum'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pekanbaru
    public function pekanbaru()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $pekanbaru = $this->data_model->data_belum_pekanbaru();
            $data = array(  'title' =>  'Total Belum Diproses Kota Pekanbaru',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'staff/belum_diproses/pekanbaru'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Dumai
    public function dumai()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $dumai = $this->data_model->data_belum_dumai();
            $data = array(  'title' =>  'Total Belum Diproses Kota Dumai',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'staff/belum_diproses/dumai'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Siak
    public function siak()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $siak = $this->data_model->data_belum_siak();
            $data = array(  'title' =>  'Total Belum Diproses Kota Siak',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'staff/belum_diproses/siak'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohul
    public function rohul()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $rohul = $this->data_model->data_belum_rohul();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Rokan Hulu',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'staff/belum_diproses/rohul'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohil
    public function rohil()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $rohil = $this->data_model->data_belum_rohil();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Rokan Hilir',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'staff/belum_diproses/rohil'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pelalawan
    public function pelalawan()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $pelalawan = $this->data_model->data_belum_pelalawan();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Pelalawan',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'staff/belum_diproses/pelalawan'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Kuansing
    public function kuansing()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $kuansing = $this->data_model->data_belum_kuansing();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kuantan Singingi',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'staff/belum_diproses/kuansing'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
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
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $meranti = $this->data_model->data_belum_meranti();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kepulauan Meranti',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'meranti'    =>  $meranti,
                            'isi'   =>  'staff/belum_diproses/meranti'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

>>>>>>> a
    // Data Kampar
    public function kampar()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $kampar = $this->data_model->data_belum_kampar();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Kampar',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'staff/belum_diproses/kampar'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhu
    public function inhu()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $inhu = $this->data_model->data_belum_inhu();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Indragiri Hulu',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'staff/belum_diproses/inhu'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhil
    public function inhil()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $inhil = $this->data_model->data_belum_inhil();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Indragiri Hilir',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'staff/belum_diproses/inhil'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Bengkalis
    public function bengkalis()
    {
        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);

            $bengkalis = $this->data_model->data_belum_bengkalis();
            $data = array(  'title' =>  'Total Belum Diproses Kabupaten Bengkalis',
                            'staff' =>  $staff,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'staff/belum_diproses/bengkalis'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit Catatan
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '3') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $staff = $this->user_model->listing($username);
            

            $regional = $this->regional_model->listing();

            //Ambil data yg akan diedit
            $belum_diproses     = $this->data_model->detail_belum($id);
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
            
            if($valid->run()===false){
                //Akhir Validasi
            
            $data = array(  'title'     =>  'Edit Belum Diproses',
                            'belum_diproses'   =>  $belum_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'staff'    =>  $staff,
                            'regional' => $regional,
                            'isi'       =>  'staff/belum_diproses/edit'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
            if (!$belum_diproses) show_404();
            //masuk database
            }else{
                $i = $this->input;
                $waktu = date("Y-m-d H:i");

                if($i->post('status') == 'Selesai') {
                    $data = array(  'id'  =>  $id,
                                    'id_user'   =>  $this->session->userdata('id'),
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
                    redirect(base_url('staff/belum_diproses'), 'refresh');
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
                    redirect(base_url('staff/belum_diproses'), 'refresh');
                }
            }
            //akhir masuk database
                
            $data = array(  'title'     =>  'Edit Belum Diproses',
                            'belum_diproses'   =>  $belum_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'staff'    =>  $staff,
                            'regional' => $regional,
                            'isi'       =>  'staff/belum_diproses/edit'
                        );
            $this->load->view('staff/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Belum Diproses 
    public function cetak()
    {
        if($this->session->userdata('level') == '3') {
            $belum_diproses = $this->data_model->data_belum();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG BELUM DILAKSANAN',
                            'belum_diproses' =>  $belum_diproses,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '3') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir_belum($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG BELUM DILAKSANAN BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pekanbaru
    public function cetak_pekanbaru()
    {
        if($this->session->userdata('level') == '3') {
            $pekanbaru = $this->data_model->data_belum_pekanbaru();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING PEKANBARU YANG BELUM DILAKSANAN',
                            'pekanbaru' =>  $pekanbaru,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_pekanbaru', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Dumai
    public function cetak_dumai()
    {
        if($this->session->userdata('level') == '3') {
            $dumai = $this->data_model->data_belum_dumai();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING DUMAI YANG BELUM DILAKSANAN',
                            'dumai' =>  $dumai,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_dumai', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Siak
    public function cetak_siak()
    {
        if($this->session->userdata('level') == '3') {
            $siak = $this->data_model->data_belum_siak();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING SIAK YANG BELUM DILAKSANAN',
                            'siak' =>  $siak,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_siak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Rohul
    public function cetak_rohul()
    {
        if($this->session->userdata('level') == '3') {
            $rohul = $this->data_model->data_belum_rohul();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HULU YANG BELUM DILAKSANAN',
                            'rohul' =>  $rohul,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_rohul', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Rohil
    public function cetak_rohil()
    {
        if($this->session->userdata('level') == '3') {
            $rohil = $this->data_model->data_belum_rohil();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HILIR YANG BELUM DILAKSANAN',
                            'rohil' =>  $rohil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_rohil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pelalawan
    public function cetak_pelalawan()
    {
        if($this->session->userdata('level') == '3') {
            $pelalawan = $this->data_model->data_belum_pelalawan();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING PELALAWAN YANG BELUM DILAKSANAN',
                            'pelalawan' =>  $pelalawan,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_pelalawan', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Kuansing
    public function cetak_kuansing()
    {
        if($this->session->userdata('level') == '3') {
            $kuansing = $this->data_model->data_belum_kuansing();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KUANTAN SINGINGI YANG BELUM DILAKSANAN',
                            'kuansing' =>  $kuansing,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_kuansing', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

<<<<<<< HEAD
=======
    // Cetak Meranti
    public function cetak_meranti()
    {
        if($this->session->userdata('level') == '3') {
            $meranti = $this->data_model->data_belum_meranti();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KEPULAUAN MERANTI YANG BELUM DILAKSANAN',
                            'meranti' =>  $meranti,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_meranti', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

>>>>>>> a
    // Cetak Kampar
    public function cetak_kampar()
    {
        if($this->session->userdata('level') == '3') {
            $kampar = $this->data_model->data_belum_kampar();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KAMPAR YANG BELUM DILAKSANAN',
                            'kampar' =>  $kampar,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_kampar', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhil
    public function cetak_inhil()
    {
        if($this->session->userdata('level') == '3') {
            $inhil = $this->data_model->data_belum_inhil();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HILIR YANG BELUM DILAKSANAN',
                            'inhil' =>  $inhil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_inhil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhil
    public function cetak_inhu()
    {
        if($this->session->userdata('level') == '3') {
            $inhu = $this->data_model->data_belum_inhu();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HULU YANG BELUM DILAKSANAN',
                            'inhu' =>  $inhu,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_inhu', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Bengkalis
    public function cetak_bengkalis()
    {
        if($this->session->userdata('level') == '3') {
            $bengkalis = $this->data_model->data_belum_bengkalis();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING BENGKALIS YANG BELUM DILAKSANAN',
                            'bengkalis' =>  $bengkalis,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('staff/belum_diproses/cetak_bengkalis', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>