<?php
defined('BASEPATH') or exit('No script access allowed');

class Kepala_cabang extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('kepala_cabang_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('status_model');
        $this->load->model('level_model');
        $this->load->model('samsat_model');
        // Proteksi Halaman
        $this->simple_login->cek_login();
    }

    // Data Tahun Ajaran
    public function index()
    {
        if($this->session->userdata('level') == '1') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);

            $kepala_cabang = $this->kepala_cabang_model->listing();
            $data = array(  'title' =>  'Data Akun Kepala Cabang',
                            'admin' =>  $admin,
                            'konfigurasi'   =>  $konfigurasi,
                            'kepala_cabang'    =>  $kepala_cabang,
                            'isi'   =>  'admin/kepala_cabang/list'
                        );
            $this->load->view('admin/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Tambah Catatan
    public function tambah()
    {
        if($this->session->userdata('level') == '1') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);

            $level = $this->level_model->listing();
            $samsat = $this->samsat_model->samsat();

            //Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('username', 'Username', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('password', 'Password', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('nama', 'Nama', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('jabatan', 'Jabatan', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()===false){
                //End validasi
                
            $data = array(	'title' => 'Tambah Akun Kepala Cabang',
                            'admin'    =>  $admin,
                            'level' =>  $level,
                            'konfigurasi'   =>  $konfigurasi,
                            'samsat'    =>  $samsat,
                            'isi'      => 'admin/kepala_cabang/tambah');
            $this->load->view('admin/layout/wrapper',$data,FALSE);
            //Masuk Database
            }else{
            $i = $this->input;   
            $status = "Aktif";
            $level = "5";
                
                $data = array(  'cabang'         =>  $i->post('cabang'),
                                'alamat'       =>  $i->post('alamat'),
                                'username'        =>  $i->post('username'),
                                'password'        =>  md5($i->post('password')),
                                'nama'     =>  $i->post('nama'),
                                'no_telpon'       =>  $i->post('no_telpon'),
                                'jabatan'     =>  $i->post('jabatan'),
                                'status'         =>  $status,
                                'id_level' =>  $level
                            );
                $this->kepala_cabang_model->tambah($data);
                $this->session->set_flashdata('sukses','Data telah ditambah');
                redirect(base_url('admin/kepala_cabang'),'refresh');
            }
            //Akhir masuk database
            $data = array(	'title' => 'Tambah Akun Kepala Cabang',
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'level' =>  $level,
                            'samsat'    =>  $samsat,
                            'isi'      => 'admin/kepala_cabang/tambah');
            $this->load->view('admin/layout/wrapper',$data);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    //Edit Catatan
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '1') {
            $konfigurasi = $this->konfigurasi_model->listing();
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);
            
            $level = $this->level_model->listing();
            $samsat = $this->samsat_model->samsat();

            //Ambil data yg akan diedit
            $kepala_cabang     = $this->kepala_cabang_model->detail($id);
            //validasi input
            $valid      = $this->form_validation;

            $valid->set_rules('username', 'Username', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('nama', 'Nama', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('jabatan', 'Jabatan', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()===false){
                //Akhir Validasi
            
            $data = array(  'title'     =>  'Edit Akun Kepala Cabang',
                            'kepala_cabang'   =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'level'  => $level,
                            'samsat'    =>  $samsat,
                            'isi'       =>  'admin/kepala_cabang/edit'
                        );
            $this->load->view('admin/layout/wrapper', $data, false);
            if(!$kepala_cabang) show_404();
            //masuk database
            }else{
                $i = $this->input;
                
                $data = array(  'id'    =>  $id,
                                'username'        =>  $i->post('username'),
                                'nama'     =>  $i->post('nama'),
                                'jabatan'     =>  $i->post('jabatan'),
                                'id_level' =>  $i->post('level'),
                                'status'         =>  $i->post('status')
                            );
                $this->kepala_cabang_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data telah diedit');
                redirect(base_url('admin/kepala_cabang'), 'refresh');
            }
            //akhir masuk database
                
            $data = array(  'title'     =>  'Edit Akun Kepala Cabang',
                            'kepala_cabang'   =>  $kepala_cabang,
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'level'  => $level,
                            'samsat'    =>  $samsat,
                            'isi'       =>  'admin/kepala_cabang/edit'
                        );
            $this->load->view('admin/layout/wrapper', $data, false);
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Delete Siswa
    public function delete($id = null)
    {
        if (!isset($id)) show_404();
        
        if($this->session->userdata('level') == '1') {
            $data = array('id' => $id);
            if (!$data) {
                show_404();
            }else{

                $kepala_cabang     = $this->kepala_cabang_model->detail($id);

                if($kepala_cabang->ttd != null) {
                    unlink('assets/upload/image/'.$kepala_cabang->ttd);
                }
                $this->kepala_cabang_model->delete($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('admin/kepala_cabang'), 'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }

    // Profile
    public function password($id = null)
    {
        if (!isset($id)) show_404();

        if($this->session->userdata('level') == '1') {
            $username = $this->session->userdata('username');
            $admin = $this->user_model->listing($username);
            $password = $this->kepala_cabang_model->detail($id);

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('pw_baru', 'Password Baru', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Edit Password Kepala Cabang',
                                'konfigurasi'   =>  $konfigurasi,
                                'admin'         =>  $admin,
                                'password'  =>  $password,
                                'isi'           => 'admin/kepala_cabang/password'  );
                $this->load->view('admin/layout/wrapper',$data,FALSE);
                if (!$password) show_404();
                // Masuk Database
            }else{
                $pass = md5($this->input->post('pw_baru'));
                $data = array (
                    'id'    =>  $password->id, 
                    'password' => $pass,
                );
                $this->kepala_cabang_model->save($data);
                $this->session->set_flashdata('sukses','Sukses merubah password!' );
                redirect(base_url('admin/kepala_cabang'),'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>