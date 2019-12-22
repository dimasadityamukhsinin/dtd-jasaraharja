<?php
defined('BASEPATH') or exit('No script access allowed');

class Petugas extends CI_Controller {

    // Load Model 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
        $this->load->model('user_model');
        $this->load->model('petugas_model');
        $this->load->model('konfigurasi_model');
        $this->load->model('status_model');
        $this->load->model('regional_model');
        $this->load->model('level_model');
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

            $petugas = $this->petugas_model->listing();
            $data = array(  'title' =>  'Data Akun Petugas Samsat',
                            'admin' =>  $admin,
                            'konfigurasi'   =>  $konfigurasi,
                            'petugas'    =>  $petugas,
                            'isi'   =>  'admin/petugas/list'
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
            $regional = $this->regional_model->listing();

            //Validasi input
            $valid = $this->form_validation;
            
            $valid->set_rules('cabang', 'Cabang', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('alamat', 'Alamat', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('username', 'Username', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('password', 'Password', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('nama', 'Nama', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('no_telpon', 'Nomor Telpon', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('jabatan', 'Jabatan', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('regional', 'Regional', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()===false){
                //End validasi
                
            $data = array(	'title' => 'Tambah Akun Petugas',
                            'admin'    =>  $admin,
                            'level' =>  $level,
                            'regional'  =>  $regional,
                            'konfigurasi'   =>  $konfigurasi,
                            'isi'      => 'admin/petugas/tambah');
            $this->load->view('admin/layout/wrapper',$data,FALSE);
            //Masuk Database
            }else{
            $i = $this->input;   
            $status = "Aktif";
            $level = "4";
                
                $data = array(  'cabang'         =>  $i->post('cabang'),
                                'alamat'       =>  $i->post('alamat'),
                                'username'        =>  $i->post('username'),
                                'password'        =>  md5($i->post('password')),
                                'nama'     =>  $i->post('nama'),
                                'no_telpon'       =>  $i->post('no_telpon'),
                                'jabatan'     =>  $i->post('jabatan'),
                                'regional'         =>  $i->post('regional'),
                                'status'         =>  $status,
                                'id_level' =>  $level
                            );
                $this->petugas_model->tambah($data);
                $this->session->set_flashdata('sukses','Data telah ditambah');
                redirect(base_url('admin/petugas'),'refresh');
            }
            //Akhir masuk database
            $data = array(	'title' => 'Tambah Akun Petugas',
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'level' =>  $level,
                            'regional'  =>  $regional,
                            'isi'      => 'admin/petugas/tambah');
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
            
            $regional = $this->regional_model->listing();
            $level = $this->level_model->listing();

            //Ambil data yg akan diedit
            $petugas     = $this->petugas_model->detail($id);
            //validasi input
            $valid      = $this->form_validation;
            
            $valid->set_rules('cabang', 'Cabang', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('alamat', 'Alamat', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('username', 'Username', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('nama', 'Nama', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('no_telpon', 'Nomor Telpon', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('jabatan', 'Jabatan', 'required',
                        array('required'    =>  "%s Harus diisi"));

            $valid->set_rules('regional', 'Regional', 'required',
                        array('required'    =>  "%s Harus diisi"));
            
            if($valid->run()===false){
                //Akhir Validasi
            
            $data = array(  'title'     =>  'Edit Akun Petugas',
                            'petugas'   =>  $petugas,
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'regional' => $regional,
                            'level'  => $level,
                            'isi'       =>  'admin/petugas/edit'
                        );
            $this->load->view('admin/layout/wrapper', $data, false);
            if (!$petugas) show_404();
            //masuk database
            }else{
                $i = $this->input;
                
                $data = array(  'id'    =>  $id,
                                'cabang'         =>  $i->post('cabang'),
                                'alamat'       =>  $i->post('alamat'),
                                'username'        =>  $i->post('username'),
                                'nama'     =>  $i->post('nama'),
                                'no_telpon'       =>  $i->post('no_telpon'),
                                'jabatan'     =>  $i->post('jabatan'),
                                'regional'         =>  $i->post('regional'),
                                'id_level' =>  $i->post('level'),
                                'status'         =>  $i->post('status')
                            );
                $this->petugas_model->edit($data);
                $this->session->set_flashdata('sukses', 'Data telah diedit');
                redirect(base_url('admin/petugas'), 'refresh');
            }
            //akhir masuk database
                
            $data = array(  'title'     =>  'Edit Akun Petugas',
                            'petugas'   =>  $petugas,
                            'konfigurasi'   =>  $konfigurasi,
                            'admin'    =>  $admin,
                            'regional' => $regional,
                            'level'  => $level,
                            'isi'       =>  'admin/petugas/edit'
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

                $petugas     = $this->petugas_model->detail($id);

                if($petugas->ttd != null) {
                    unlink('assets/upload/image/'.$petugas->ttd);
                }

                $this->petugas_model->delete($data);
                $this->session->set_flashdata('sukses', 'Data telah dihapus');
                redirect(base_url('admin/petugas'), 'refresh');
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
            $password = $this->petugas_model->detail($id);

            $konfigurasi = $this->konfigurasi_model->listing();
            // Validasi input
            $valid = $this->form_validation;

            $valid->set_rules('pw_baru', 'Password Baru', 'required',
                        array('required'    =>  "%s Harus diisi"));

            if($valid->run()===false){
                // End Validasi

                $data = array(  'title'         => 'Edit Password Petugas',
                                'konfigurasi'   =>  $konfigurasi,
                                'admin'         =>  $admin,
                                'password'      =>  $password,
                                'isi'           => 'admin/petugas/password'  );
                $this->load->view('admin/layout/wrapper',$data,FALSE);
                if (!$password) show_404();
                // Masuk Database
            }else{
                $pass = md5($this->input->post('pw_baru'));
                $data = array (
                    'id'    =>  $password->id, 
                    'password' => $pass,
                );
                $this->petugas_model->save($data);
                $this->session->set_flashdata('sukses','Sukses merubah password!' );
                redirect(base_url('admin/petugas'),'refresh');
            }
        }else{
            $this->session->set_flashdata('warning','Anda belum login');
            redirect(base_url('login'),'refresh');
        }
    }
}
?>