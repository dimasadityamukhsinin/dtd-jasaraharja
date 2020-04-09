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
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $sudah_diproses = $this->data_model->data_sudah();
<<<<<<< HEAD
            $data = array(  'title' =>  'Menu On Progress',
=======
            $data = array(  'title' =>  'Menu Sudah Diproses',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'sudah_diproses'    =>  $sudah_diproses,
                            'isi'   =>  'kasubag/sudah_diproses/list'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
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
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $total_sudah = $this->data_model->data_sudah();
<<<<<<< HEAD
            $data = array(  'title' =>  'Menu On Progress',
=======
            $data = array(  'title' =>  'Menu Sudah Diproses',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'total_sudah'    =>  $total_sudah,
                            'isi'   =>  'kasubag/sudah_diproses/total_sudah'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pekanbaru
    public function pekanbaru()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $pekanbaru = $this->data_model->data_sudah_pekanbaru();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Pekanbaru',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Pekanbaru',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'kasubag/sudah_diproses/pekanbaru'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Dumai
    public function dumai()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $dumai = $this->data_model->data_sudah_dumai();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Dumai',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Dumai',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'kasubag/sudah_diproses/dumai'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Siak
    public function siak()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $siak = $this->data_model->data_sudah_siak();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kota Siak',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kota Siak',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'kasubag/sudah_diproses/siak'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohul
    public function rohul()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $rohul = $this->data_model->data_sudah_rohul();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hulu',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Rokan Hulu',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'kasubag/sudah_diproses/rohul'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Rohil
    public function rohil()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $rohil = $this->data_model->data_sudah_rohil();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Rokan Hilir',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Rokan Hilir',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'kasubag/sudah_diproses/rohil'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Pelalawan
    public function pelalawan()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $pelalawan = $this->data_model->data_sudah_pelalawan();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Pelalawan',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Pelalawan',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'kasubag/sudah_diproses/pelalawan'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Kuansing
    public function kuansing()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $kuansing = $this->data_model->data_sudah_kuansing();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Kuantan Singingi',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kuantan Singingi',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'kasubag/sudah_diproses/kuansing'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
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
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $meranti = $this->data_model->data_sudah_meranti();
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kepulauan Meranti',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'meranti'    =>  $meranti,
                            'isi'   =>  'kasubag/sudah_diproses/meranti'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

>>>>>>> a
    // Data Kampar
    public function kampar()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $kampar = $this->data_model->data_sudah_kampar();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Kampar',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Kampar',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'kasubag/sudah_diproses/kampar'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhu
    public function inhu()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $inhu = $this->data_model->data_sudah_inhu();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hulu',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Indragiri Hulu',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'kasubag/sudah_diproses/inhu'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Inhil
    public function inhil()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $inhil = $this->data_model->data_sudah_inhil();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Indragiri Hilir',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Indragiri Hilir',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'kasubag/sudah_diproses/inhil'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Bengkalis
    public function bengkalis()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $bengkalis = $this->data_model->data_sudah_bengkalis();
<<<<<<< HEAD
            $data = array(  'title' =>  'Total On Progress Kabupaten Bengkalis',
=======
            $data = array(  'title' =>  'Total Sudah Diproses Kabupaten Bengkalis',
>>>>>>> a
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'kasubag/sudah_diproses/bengkalis'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Tambah
    public function tambah()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $regional = $this->regional_model->listing();

            //Validasi input
            $valid = $this->form_validation;
            
            $valid->set_rules('nopol', 'Nomor Polisi', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('pemilik', 'Pemilik', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('alamat', 'alamat', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('no_telpon', 'Nomor Telpon', 'required',
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
                //End validasi
                
<<<<<<< HEAD
            $data = array(	'title' => 'Tambah On Progress',
=======
            $data = array(	'title' => 'Tambah Sudah Diproses',
>>>>>>> a
                            'kasubag'    =>  $kasubag,
                            'regional'  =>  $regional,
                            'konfigurasi'   =>  $konfigurasi,
                            'isi'      => 'kasubag/sudah_diproses/tambah');
            $this->load->view('kasubag/layout/wrapper',$data,FALSE);
            //Masuk Database
            }else{
            $i = $this->input;   
            $status = "Sudah Diproses";
                
                $data = array(  'nopol'         =>  $i->post('nopol'),
                                'pemilik'       =>  $i->post('pemilik'),
                                'alamat'        =>  $i->post('alamat'),
                                'no_telpon'     =>  $i->post('no_telpon'),
                                'kondisi'       =>  $i->post('kondisi'),
                                'status'        =>  $status,
                                'masa_awal'     =>  $i->post('masa_awal'),
                                'masa_akhir'    =>  $i->post('masa_akhir'),
                                'tarif'         =>  $i->post('tarif'),
                                'regional'      =>  $i->post('regional'),
                                'janji_bayar'      =>  $i->post('janji_bayar'),
                            );
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
                $this->data_model->tambah($data);
                $this->session->set_flashdata('sukses','Data telah ditambah');
                redirect(base_url('kasubag/sudah_diproses'),'refresh');
            }
            //Akhir masuk database
<<<<<<< HEAD
            $data = array(	'title' => 'Tambah On Progress',
=======
            $data = array(	'title' => 'Tambah Sudah Diproses',
>>>>>>> a
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'regional'  =>  $regional,
                            'isi'      => 'kasubag/sudah_diproses/tambah');
            $this->load->view('kasubag/layout/wrapper',$data,FALSE);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit Catatan
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);
            

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
            
<<<<<<< HEAD
            $data = array(  'title'     =>  'Edit On Progress',
=======
            $data = array(  'title'     =>  'Edit Sudah Diproses',
>>>>>>> a
                            'sudah_diproses'   =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'regional' => $regional,
                            'isi'       =>  'kasubag/sudah_diproses/edit'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
            
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
                    redirect(base_url('kasubag/sudah_diproses'), 'refresh');
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
                    redirect(base_url('kasubag/sudah_diproses'), 'refresh');
                }
            }
            //akhir masuk database
                
<<<<<<< HEAD
            $data = array(  'title'     =>  'Edit On Progress',
=======
            $data = array(  'title'     =>  'Edit Sudah Diproses',
>>>>>>> a
                            'sudah_diproses'   =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'regional' => $regional,
                            'isi'       =>  'kasubag/sudah_diproses/edit'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Siswa
    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if($this->session->userdata('level') == '2') {
            $data = array('id' => $id);
            if (!$data) {
                show_404();
            }else{

                $sudah_diproses     = $this->data_model->detail_delete($id);
                if($sudah_diproses->ttd != null) {
                    unlink('assets/upload/image/'.$sudah_diproses->ttd);
                }
                
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
                $this->data_model->delete($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('kasubag/sudah_diproses'), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Belum Diproses 
    public function cetak()
    {
        if($this->session->userdata('level') == '2') {
            $sudah_diproses = $this->data_model->data_sudah();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DIPROSES',
>>>>>>> a
                            'sudah_diproses' =>  $sudah_diproses,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '2') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir_sudah($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING YANG On Progress BERDASARKAN MASA AKHIR',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DIPROSES BERDASARKAN MASA AKHIR',
>>>>>>> a
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pekanbaru
    public function cetak_pekanbaru()
    {
        if($this->session->userdata('level') == '2') {
            $pekanbaru = $this->data_model->data_sudah_pekanbaru();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING PEKANBARU YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING PEKANBARU YANG SUDAH DIPROSES',
>>>>>>> a
                            'pekanbaru' =>  $pekanbaru,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_pekanbaru', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Dumai
    public function cetak_dumai()
    {
        if($this->session->userdata('level') == '2') {
            $dumai = $this->data_model->data_sudah_dumai();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING DUMAI YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING DUMAI YANG SUDAH DIPROSES',
>>>>>>> a
                            'dumai' =>  $dumai,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_dumai', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Siak
    public function cetak_siak()
    {
        if($this->session->userdata('level') == '2') {
            $siak = $this->data_model->data_sudah_siak();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING SIAK YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING SIAK YANG SUDAH DIPROSES',
>>>>>>> a
                            'siak' =>  $siak,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_siak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Rohul
    public function cetak_rohul()
    {
        if($this->session->userdata('level') == '2') {
            $rohul = $this->data_model->data_sudah_rohul();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HULU YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HULU YANG SUDAH DIPROSES',
>>>>>>> a
                            'rohul' =>  $rohul,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_rohul', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Rohil
    public function cetak_rohil()
    {
        if($this->session->userdata('level') == '2') {
            $rohil = $this->data_model->data_sudah_rohil();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HILIR YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HILIR YANG SUDAH DIPROSES',
>>>>>>> a
                            'rohil' =>  $rohil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_rohil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pelalawan
    public function cetak_pelalawan()
    {
        if($this->session->userdata('level') == '2') {
            $pelalawan = $this->data_model->data_sudah_pelalawan();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING PELALAWAN YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING PELALAWAN YANG SUDAH DIPROSES',
>>>>>>> a
                            'pelalawan' =>  $pelalawan,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_pelalawan', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Kuansing
    public function cetak_kuansing()
    {
        if($this->session->userdata('level') == '2') {
            $kuansing = $this->data_model->data_sudah_kuansing();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING KUANTAN SINGINGI YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING KUANTAN SINGINGI YANG SUDAH DIPROSES',
>>>>>>> a
                            'kuansing' =>  $kuansing,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_kuansing', $data, false);
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
        if($this->session->userdata('level') == '2') {
            $meranti = $this->data_model->data_sudah_meranti();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KEPULAUAN MERANTI YANG SUDAH DIPROSES',
                            'meranti' =>  $meranti,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_meranti', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

>>>>>>> a
    // Cetak Kampar
    public function cetak_kampar()
    {
        if($this->session->userdata('level') == '2') {
            $kampar = $this->data_model->data_sudah_kampar();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING KAMPAR YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING KAMPAR YANG SUDAH DIPROSES',
>>>>>>> a
                            'kampar' =>  $kampar,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_kampar', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhu
    public function cetak_inhu()
    {
        if($this->session->userdata('level') == '2') {
            $inhu = $this->data_model->data_sudah_inhu();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HULU YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HULU YANG SUDAH DIPROSES',
>>>>>>> a
                            'inhu' =>  $inhu,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_inhu', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhil
    public function cetak_inhil()
    {
        if($this->session->userdata('level') == '2') {
            $inhil = $this->data_model->data_sudah_inhil();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HILIR YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HILIR YANG SUDAH DIPROSES',
>>>>>>> a
                            'inhil' =>  $inhil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_inhil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Bengkalis
    public function cetak_bengkalis()
    {
        if($this->session->userdata('level') == '2') {
            $bengkalis = $this->data_model->data_sudah_bengkalis();
            $konfigurasi = $this->konfigurasi_model->listing();
<<<<<<< HEAD
            $data = array(  'title' =>  'DATA OUTSTANDING BENGKALIS YANG On Progress',
=======
            $data = array(  'title' =>  'DATA OUTSTANDING BENGKALIS YANG SUDAH DIPROSES',
>>>>>>> a
                            'bengkalis' =>  $bengkalis,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/sudah_diproses/cetak_bengkalis', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>