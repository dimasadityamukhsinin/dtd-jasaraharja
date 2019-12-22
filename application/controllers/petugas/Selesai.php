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
        if($this->session->userdata('level') == '4') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);

            $regional = $this->session->userdata('regional');
            $selesai = $this->data_model->data_selesai_user($regional);
            $data = array(  'title' =>  'Total Selesai ',
                            'petugas' =>  $petugas,
                            'konfigurasi'   =>  $konfigurasi,
                            'selesai'    =>  $selesai,
                            'isi'   =>  'petugas/selesai/list'
                        );
            $this->load->view('petugas/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '4') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);

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
                                'petugas'    =>  $petugas,
                                'regional' => $regional,
                                'isi'       =>  'petugas/selesai/edit'
                            );
                $this->load->view('petugas/layout/wrapper', $data, false);
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
                redirect(base_url('petugas/selesai'), 'refresh');
                
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
                redirect(base_url('petugas/selesai'), 'refresh');
            }}
            //akhir masuk database
            $data = array(  'title'     =>  'Edit Selesai',
                            'selesai'   =>  $selesai,
                            'konfigurasi'   =>  $konfigurasi,
                            'petugas'    =>  $petugas,
                            'regional' => $regional,
                            'isi'       =>  'petugas/selesai/edit'
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
            $selesai = $this->data_model->data_selesai_user($regional);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG SUDAH DILAKSANAKAN',
                            'selesai' =>  $selesai,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('petugas/selesai/cetak', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
    
    // Cetak Data Selesai 
    public function cetak_data($id=null)
    {
        if (!isset($id)) show_404();
        
        if($this->session->userdata('level') == '4') {
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
            $this->load->view('petugas/selesai/cetak_data', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_akhir()
    {
        if($this->session->userdata('level') == '4') {
            $masa_akhir = $this->input->post('masa_akhir');
            $cetak_akhir = $this->data_model->cetak_akhir_selesai_user($masa_akhir);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG TELAH DILAKSANAN BERDASARKAN MASA AKHIR',
                            'cetak_akhir' =>  $cetak_akhir,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('petugas/selesai/cetak_akhir', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function cetak_tp()
    {
        if($this->session->userdata('level') == '4') {
            $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
            $cetak_tp = $this->data_model->cetak_tp_selesai_user($tanggal_pelaksanaan);
            $konfigurasi = $this->konfigurasi_model->listing();
            $data = array(  'title' =>  'DATA OUTSTANDING YANG TELAH DILAKSANAN BERDASARKAN TANGGAL PELAKSANAAN',
                            'cetak_tp' =>  $cetak_tp,
                            'konfigurasi'   =>  $konfigurasi
                        );
            $this->load->view('petugas/selesai/cetak_tp', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Gambar
    public function gambar($id = null)
    {
        if (!isset($id)) show_404();
        if($this->session->userdata('level') == '4') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $petugas = $this->user_model->listing($username);

            $selesai = $this->data_model->detail($id);

            $gambar     = $this->data_model->gambar($id);
            
            $data = array(  'title'       => 'Gambar',
                            'petugas'       => $petugas,
                            'konfigurasi'   =>  $konfigurasi,
                            'gambar'    =>  $gambar,
                            'selesai'   =>  $selesai,
                            'isi'         => 'petugas/selesai/gambar'  );
            $this->load->view('petugas/layout/wrapper',$data,FALSE);
            if (!$selesai) show_404();
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    public function uploadImage($id = null) 
    { 

        if (!isset($id)) show_404();
        if($this->session->userdata('level') == '4') {
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
            redirect(base_url('petugas/selesai/gambar/'.$id), 'refresh');
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Selesai
    public function delete_gambar($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '4') {

            $data = array('id' => $id);
            $gambar     = $this->data_model->detail_gambar($id);
            if (!$data) {
                show_404();
            }else{
                unlink('assets/upload/image/'.$gambar->foto);
                $this->data_model->delete_gambar($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('petugas/selesai/gambar/'.$gambar->id_data), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>