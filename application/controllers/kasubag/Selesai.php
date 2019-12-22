<?php
defined('BASEPATH') or exit('No script access allowed');

class Selesai extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('regional_model');
        $this->load->model('kasubag_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Data Tahun Ajaran
    public function index()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);
            $selesai = $this->data_model->data_selesai();
            $data = array(  'title' =>  'Menu Selesai ',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'selesai'    =>  $selesai,
                            'isi'   =>  'kasubag/selesai/list'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Total Data Selesai
    public function total_selesai()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $selesai = $this->data_model->data_selesai();
            $data = array(  'title' =>  'Total Selesai',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'selesai'    =>  $selesai,
                            'isi'   =>  'kasubag/selesai/total_selesai'
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

            $pekanbaru = $this->data_model->data_selesai_pekanbaru();
            $data = array(  'title' =>  'Total Selesai Kota Pekanbaru',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'pekanbaru'    =>  $pekanbaru,
                            'isi'   =>  'kasubag/selesai/pekanbaru'
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

            $dumai = $this->data_model->data_selesai_dumai();
            $data = array(  'title' =>  'Total Selesai Kota Dumai',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'dumai'    =>  $dumai,
                            'isi'   =>  'kasubag/selesai/dumai'
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

            $siak = $this->data_model->data_selesai_siak();
            $data = array(  'title' =>  'Total Selesai Kota Siak',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'siak'    =>  $siak,
                            'isi'   =>  'kasubag/selesai/siak'
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

            $rohul = $this->data_model->data_selesai_rohul();
            $data = array(  'title' =>  'Total Selesai Kabupaten Rokan Hulu',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohul'    =>  $rohul,
                            'isi'   =>  'kasubag/selesai/rohul'
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

            $rohil = $this->data_model->data_selesai_rohil();
            $data = array(  'title' =>  'Total Selesai Kabupaten Rokan Hilir',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'rohil'    =>  $rohil,
                            'isi'   =>  'kasubag/selesai/rohil'
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

            $pelalawan = $this->data_model->data_selesai_pelalawan();
            $data = array(  'title' =>  'Total Selesai Diproses Kabupaten Pelalawan',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'pelalawan'    =>  $pelalawan,
                            'isi'   =>  'kasubag/selesai/pelalawan'
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

            $kuansing = $this->data_model->data_selesai_kuansing();
            $data = array(  'title' =>  'Total Selesai Kabupaten Kuantan Singingi',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'kuansing'    =>  $kuansing,
                            'isi'   =>  'kasubag/selesai/kuansing'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Meranti
    public function meranti()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $meranti = $this->data_model->data_selesai_meranti();
            $data = array(  'title' =>  'Total Selesai Kabupaten Kepulauan Meranti',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'meranti'    =>  $meranti,
                            'isi'   =>  'kasubag/selesai/meranti'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Data Kampar
    public function kampar()
    {
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $kampar = $this->data_model->data_selesai_kampar();
            $data = array(  'title' =>  'Total Selesai Kabupaten Kampar',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'kampar'    =>  $kampar,
                            'isi'   =>  'kasubag/selesai/kampar'
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

            $inhu = $this->data_model->data_selesai_inhu();
            $data = array(  'title' =>  'Total Selesai Kabupaten Indragiri Hulu',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhu'    =>  $inhu,
                            'isi'   =>  'kasubag/selesai/inhu'
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

            $inhil = $this->data_model->data_selesai_inhil();
            $data = array(  'title' =>  'Total Selesai Kabupaten Indragiri Hilir',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'inhil'    =>  $inhil,
                            'isi'   =>  'kasubag/selesai/inhil'
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

            $bengkalis = $this->data_model->data_selesai_bengkalis();
            $data = array(  'title' =>  'Total Selesai Kabupaten Bengkalis',
                            'kasubag' =>  $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'bengkalis'    =>  $bengkalis,
                            'isi'   =>  'kasubag/selesai/bengkalis'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Tambah Catatan
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
            
            if($valid->run()===false){
                //End validasi
                
            $data = array(	'title' => 'Selesai',
                            'kasubag'    =>  $kasubag,
                            'regional'  =>  $regional,
                            'konfigurasi'   =>  $konfigurasi,
                            'isi'      => 'kasubag/selesai/tambah');
            $this->load->view('kasubag/layout/wrapper',$data,FALSE);
            //Masuk Database
            }else{
            $i = $this->input;   
            $status = "Selesai";
                
                $data = array(  'nopol'         =>  $i->post('nopol'),
                                'pemilik'       =>  $i->post('pemilik'),
                                'alamat'        =>  $i->post('alamat'),
                                'no_telpon'     =>  $i->post('no_telpon'),
                                'kondisi'       =>  $i->post('kondisi'),
                                'status'     =>  $status,
                                'masa_awal'     =>  $i->post('masa_awal'),
                                'masa_akhir'    =>  $i->post('masa_akhir'),
                                'tarif'         =>  $i->post('tarif'),
                                'regional'         =>  $i->post('regional'),
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
                redirect(base_url('kasubag/selesai'),'refresh');
            }
            //Akhir masuk database
            $data = array(	'title' => 'Tambah Selesai',
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'regional'  =>  $regional,
                            'isi'      => 'kasubag/selesai/tambah');
            $this->load->view('kasubag/layout/wrapper',$data,FALSE);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $selesai     = $this->data_model->detail($id);

            $regional = $this->regional_model->listing();
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
            
            if($valid->run()){
                //Cek jika gambar diganti
                if(!empty($_FILES['foto']['name'])){
                    
                $config['upload_path']      = './assets/upload/image/';
                $config['allowed_types']    = '*';
                $config['max_size']         = '2400';//Dalam KB
                $config['max_width']        = '2024';
                $config['max_height']       = '2024';
                
                $this->load->library('upload',$config);
                
                if(!$this->upload->do_upload('foto')){
                //Akhir Validasi
            
                $data = array(  'title'     =>  'Edit Selesai',
                                'selesai'   =>  $selesai,
                                'konfigurasi'   =>  $konfigurasi,
                                'kasubag'    =>  $kasubag,
                                'regional' => $regional,
                                'isi'       =>  'kasubag/selesai/edit'
                            );
                $this->load->view('kasubag/layout/wrapper', $data, false);
                if (!$selesai) show_404();
            //masuk database
            }else{
                $upload_gambar = array('upload_data' => $this->upload->data());
                    
                //Buat thumbnail gambar
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 250;//Dalam Pixel
                $config['height']           = 250;//Dalam Pixel
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //Akhir buat thumbnail

                if($selesai->ttd)
                {
                    unlink('assets/upload/image/'.$selesai->ttd);
                }
                
                $i = $this->input;
                $waktu = date("Y-m-d H:i");
                
                $data = array(  //Disimpan nama file gambar
                                'ttd'          =>  $upload_gambar['upload_data']['file_name'],
                                'id'  =>  $id,
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
                redirect(base_url('kasubag/selesai'), 'refresh');
                
            }}else{
                //Edit produk tanpa ganti gambar
                $i = $this->input;
                $waktu = date("Y-m-d H:i");
                
                $data = array(  //Disimpan nama file gambar(gambar tidak diganti)
                                // 'foto'          =>  $upload_gambar['upload_data']['file_name'],
                                'id'  =>  $id,
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
                redirect(base_url('kasubag/selesai'), 'refresh');
            }}
            //akhir masuk database
            $data = array(  'title'     =>  'Edit Selesai',
                            'selesai'   =>  $selesai,
                            'konfigurasi'   =>  $konfigurasi,
                            'kasubag'    =>  $kasubag,
                            'regional' => $regional,
                            'isi'       =>  'kasubag/selesai/edit'
                        );
            $this->load->view('kasubag/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Selesai 
    public function cetak()
    {
        if($this->session->userdata('level') == '2') {
            $selesai = $this->data_model->data_selesai();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DILAKSANAKAN',
                            'selesai' =>  $selesai,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '2') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir_selesai($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG TELAH DILAKSANAN BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_akhir', $data, false);
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
            $this->load->view('kasubag/selesai/cetak_data', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_tp()
    {
        if($this->session->userdata('level') == '2') {
            $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
            $cetak_tp = $this->data_model->cetak_tp_selesai($tanggal_pelaksanaan);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG TELAH DILAKSANAN BERDASARKAN TANGGAL PELAKSANAAN',
                            'cetak_tp' =>  $cetak_tp,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_tp', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Selesai
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '2') {
            $data = array('id' => $id);

            if (!$data) {
                show_404();
            }else{
                $selesai     = $this->data_model->detail_delete($id);
                if($selesai->ttd != null) {
                    unlink('assets/upload/image/'.$selesai->ttd);
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
                redirect(base_url('kasubag/selesai'), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pekanbaru
    public function cetak_pekanbaru()
    {
        if($this->session->userdata('level') == '2') {
            $pekanbaru = $this->data_model->data_selesai_pekanbaru();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING PEKANBARU YANG SUDAH DILAKSANAN',
                            'pekanbaru' =>  $pekanbaru,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_pekanbaru', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Dumai
    public function cetak_dumai()
    {
        if($this->session->userdata('level') == '2') {
            $dumai = $this->data_model->data_selesai_dumai();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING DUMAI YANG SUDAH DILAKSANAN',
                            'dumai' =>  $dumai,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_dumai', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Siak
    public function cetak_siak()
    {
        if($this->session->userdata('level') == '2') {
            $siak = $this->data_model->data_selesai_siak();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING SIAK YANG SUDAH DILAKSANAN',
                            'siak' =>  $siak,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_siak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Rohul
    public function cetak_rohul()
    {
        if($this->session->userdata('level') == '2') {
            $rohul = $this->data_model->data_selesai_rohul();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HULU YANG SUDAH DILAKSANAN',
                            'rohul' =>  $rohul,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_rohul', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Rohil
    public function cetak_rohil()
    {
        if($this->session->userdata('level') == '2') {
            $rohil = $this->data_model->data_selesai_rohil();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING ROKAN HILIR YANG SELESAI DILAKSANAN',
                            'rohil' =>  $rohil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_rohil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Pelalawan
    public function cetak_pelalawan()
    {
        if($this->session->userdata('level') == '2') {
            $pelalawan = $this->data_model->data_selesai_pelalawan();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING PELALAWAN YANG SELESAI DILAKSANAN',
                            'pelalawan' =>  $pelalawan,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_pelalawan', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Kuansing
    public function cetak_kuansing()
    {
        if($this->session->userdata('level') == '2') {
            $kuansing = $this->data_model->data_selesai_kuansing();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KUANTAN SINGINGI YANG SELESAI DILAKSANAN',
                            'kuansing' =>  $kuansing,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_kuansing', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Meranti
    public function cetak_meranti()
    {
        if($this->session->userdata('level') == '2') {
            $meranti = $this->data_model->data_selesai_meranti();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KEPULAUAN MERANTI YANG SELESAI DILAKSANAN',
                            'meranti' =>  $meranti,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_meranti', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Kampar
    public function cetak_kampar()
    {
        if($this->session->userdata('level') == '2') {
            $kampar = $this->data_model->data_selesai_kampar();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING KAMPAR YANG SELESAI DILAKSANAN',
                            'kampar' =>  $kampar,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_kampar', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhil
    public function cetak_inhil()
    {
        if($this->session->userdata('level') == '2') {
            $inhil = $this->data_model->data_selesai_inhil();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HILIR YANG SELESAI DILAKSANAN',
                            'inhil' =>  $inhil,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_inhil', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Inhil
    public function cetak_inhu()
    {
        if($this->session->userdata('level') == '2') {
            $inhu = $this->data_model->data_selesai_inhu();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING INDRAGIRI HULU YANG SELESAI DILAKSANAN',
                            'inhu' =>  $inhu,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_inhu', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Cetak Bengkalis
    public function cetak_bengkalis()
    {
        if($this->session->userdata('level') == '2') {
            $bengkalis = $this->data_model->data_selesai_bengkalis();
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING BENGKALIS YANG SELESAI DILAKSANAN',
                            'bengkalis' =>  $bengkalis,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('kasubag/selesai/cetak_bengkalis', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Gambar
    public function gambar($id = null)
    {
        if (!isset($id)) show_404();
        if($this->session->userdata('level') == '2') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $kasubag = $this->user_model->listing($username);

            $selesai = $this->data_model->detail($id);

            $gambar     = $this->data_model->gambar($id);
            
            $data = array(  'title'       => 'Gambar',
                            'kasubag'       => $kasubag,
                            'konfigurasi'   =>  $konfigurasi,
                            'gambar'    =>  $gambar,
                            'selesai'   =>  $selesai,
                            'isi'         => 'kasubag/selesai/gambar'  );
            $this->load->view('kasubag/layout/wrapper',$data,FALSE);
            if (!$selesai) show_404();
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function uploadImage($id = null) 
    { 

        if (!isset($id)) show_404();
        if($this->session->userdata('level') == '2') {
            $data = [];
    
            $count = count($_FILES['files']['name']);
    
            for($i=0;$i<$count;$i++){
    
                if(!empty($_FILES['files']['name'][$i])){
        
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];
        
                    $config['upload_path'] = './assets/upload/image/'; 
                    $config['allowed_types'] = '*';
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = $_FILES['files']['name'][$i];
        
                    $this->load->library('upload',$config); 
        
                    if($this->upload->do_upload('file')){
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $data = array(
                        'id_data'       =>  $id,
                        'foto'          =>  $filename,
                    );
                    $this->data_model->tambah_gambar($data);
        
                    $data['totalFiles'][] = $filename;
                    }
                }
    
            }
    
            $this->session->set_flashdata('sukses', 'Gambar telah ditambah');
            redirect(base_url('kasubag/selesai/gambar/'.$id), 'refresh');
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Selesai
    public function delete_gambar($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '2') {

            $data = array('id' => $id);
            $gambar     = $this->data_model->detail_gambar($id);
            if (!$data) {
                show_404();
            }else{
                unlink('assets/upload/image/'.$gambar->foto);
                $this->data_model->delete_gambar($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('kasubag/selesai/gambar/'.$gambar->id_data), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>