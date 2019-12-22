<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

    // Load Model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->load->model('user_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Konfigurasi Umum
    public function index()
    {
        if($this->session->userdata('level') == '1') {
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);

            $konfigurasi = $this->konfigurasi_model->listing();

            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('nama_instansi', 'Nama Instansi', 'required',
                        array('required' => "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'     =>  'Konfigurasi Jasa Raharja',
                                'konfigurasi'     =>  $konfigurasi,
                                'admin'    =>  $admin,
                                'isi'       =>  'admin/konfigurasi/list'
                            );
                $this->load->view('admin/layout/wrapper', $data, false);
                // Masuk Database
            }else{
                $i = $this->input;

                $data = array(  'id'  =>  $konfigurasi->id,
                                'nama_instansi'      =>  $i->post('nama_instansi'),
                                'alamat'         =>  $i->post('alamat'),
                                'no_telpon'         =>  $i->post('no_telpon')
                            );
                $this->konfigurasi_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data telah diupdate');
                redirect(base_url('admin/konfigurasi'), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Konfigurasi gambar
    public function gambar()
    {
        if($this->session->userdata('level') == '1') {
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);

            $konfigurasi = $this->konfigurasi_model->listing();

            //validasi input
            $valid      = $this->form_validation;
            
            $valid->set_rules('gambar', 'Gambar Jasa Raharja', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()){
                //Cek jika gambar diganti
                if(!empty($_FILES['gambar']['name'])){
                    
                $config['upload_path']      = './assets/upload/image/';
                $config['allowed_types']    = '*';
                $config['max_size']         = '2400';//Dalam KB
                $config['max_width']        = '2024';
                $config['max_height']       = '2024';
                
                $this->load->library('upload',$config);
                
                if(!$this->upload->do_upload('gambar')){
                //Akhir Validasi
            
            $data = array(  'title'       => 'Konfigurasi Gambar Jasa Raharja',
                            'konfigurasi'       => $konfigurasi,
                            'admin'    =>  $admin,
                            'error'       => $this->upload->display_errors(),
                            'isi'         => 'admin/konfigurasi/gambar'  );
            $this->load->view('admin/layout/wrapper',$data,FALSE);
            //masuk database
            }else{
                $upload_gambar = array('upload_data' => $this->upload->data());
                    
                //Buat thumbnail gambar
                $config['image_library']    = 'gd2';
                $config['source_image']     = './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];
                //lokasi folder thumbnail
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 350;//Dalam Pixel
                $config['height']           = 350;//Dalam Pixel
                $config['thumb_marker']     = '';

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                //Akhir buat thumbnail

                if($konfigurasi->gambar)
                {
                    unlink('assets/upload/image/'.$konfigurasi->gambar);
                }
                
                $i = $this->input;

                $data = array(  //Disimpan nama file gambar
                                'gambar'          =>  $upload_gambar['upload_data']['file_name'],
                                'id'     =>  $konfigurasi->id,
                            );
                $this->konfigurasi_model->edit($data);
                $this->session->set_flashdata('sukses','Data telah diedit');
                redirect(base_url('admin/konfigurasi/gambar'),'refresh');
                
            }}else{
                //Edit guru tanpa ganti gambar
                $i = $this->input;

                $data = array(  //Disimpan nama file gambar
                                //'gambar'          =>  $upload_gambar['upload_data']['file_name'],
                                'kode_konfigurasi'     =>  $konfigurasi->kode_konfigurasi,
                            );
                $this->konfigurasi_model->edit($data);
                $this->session->set_flashdata('sukses','Data telah diedit');
                redirect(base_url('admin/konfigurasi/gambar'),'refresh');
            }}
            //akhir masuk database
            $data = array(  'title'       => 'Konfigurasi Gambar Jasa Raharja',
                            'konfigurasi'       => $konfigurasi,
                            'admin'    =>  $admin,
                            'isi'         => 'admin/konfigurasi/gambar'  );
            $this->load->view('admin/layout/wrapper',$data,FALSE);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>