<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
    
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        //Load data model user
        $this->CI->load->model('user_model');
        $this->CI->load->model('log_model');
    }
    
    //Fungsi Login
    public function login($username,$password)
    {
        $check = $this->CI->user_model->login($username,$password);
        $sukses = $this->CI->load->model('log_model');
        //Jika ada data user, maka session untuk login dibuat
        if($check)
        {
            $status = $check->status;
            if($status == 'Aktif')
            {
                $level = $check->id_level;
                if($level == '1')
                {
                    $username     = $check->username;
                    $id        = $check->id;
                    $nama        = $check->nama;
                    $jabatan        = $check->jabatan;
                    $level        = $check->id_level;
                    $this->CI->log_model->log_sukses($username, $password);
                    //Buat session
                    $this->CI->session->set_userdata('id',$id);
                    $this->CI->session->set_userdata('nama',$nama);
                    $this->CI->session->set_userdata('username',$username);
                    $this->CI->session->set_userdata('jabatan',$jabatan);
                    $this->CI->session->set_userdata('level',$level);
                    //jika sukses tampil halaman admin yang diproteksi
                    redirect(base_url('admin/dashboard'),'refresh');
                }else if($level == '2')
                {
                    $username     = $check->username;
                    $id        = $check->id;
                    $nama        = $check->nama;
                    $regional = $check->regional;
                    $level        = $check->id_level;
                    $this->CI->log_model->log_sukses($username, $password);
                    //Buat session
                    $this->CI->session->set_userdata('id',$id);
                    $this->CI->session->set_userdata('nama',$nama);
                    $this->CI->session->set_userdata('username',$username);
                    $this->CI->session->set_userdata('regional',$regional);
                    $this->CI->session->set_userdata('level',$level);
                    //jika sukses tampil halaman admin yang diproteksi
                    redirect(base_url('kasubag/dashboard'),'refresh');
                }else if($level == '3')
                {
                    $username     = $check->username;
                    $id        = $check->id;
                    $nama        = $check->nama;
                    $regional = $check->regional;
                    $level        = $check->id_level;
                    $this->CI->log_model->log_sukses($username, $password);
                    //Buat session
                    $this->CI->session->set_userdata('id',$id);
                    $this->CI->session->set_userdata('nama',$nama);
                    $this->CI->session->set_userdata('username',$username);
                    $this->CI->session->set_userdata('regional',$regional);
                    $this->CI->session->set_userdata('level',$level);
                    //jika sukses tampil halaman admin yang diproteksi
                    redirect(base_url('staff/dashboard'),'refresh');
                }else if($level == '4')
                {
                    $username     = $check->username;
                    $id        = $check->id;
                    $nama        = $check->nama;
                    $regional = $check->regional;
                    $nama_regional = $check->nama_regional;
                    $level        = $check->id_level;
                    $this->CI->log_model->log_sukses($username, $password);
                    //Buat session
                    $this->CI->session->set_userdata('id',$id);
                    $this->CI->session->set_userdata('nama',$nama);
                    $this->CI->session->set_userdata('username',$username);
                    $this->CI->session->set_userdata('regional',$regional);
                    $this->CI->session->set_userdata('nama_regional',$nama_regional);
                    $this->CI->session->set_userdata('level',$level);
                    //jika sukses tampil halaman admin yang diproteksi
                    redirect(base_url('petugas/dashboard'),'refresh');
                }else if($level == '5')
                {
                    $username     = $check->username;
                    $id        = $check->id;
                    $nama        = $check->nama;
                    $jabatan        = $check->jabatan;
                    $level        = $check->id_level;
                    $this->CI->log_model->log_sukses($username, $password);
                    //Buat session
                    $this->CI->session->set_userdata('id',$id);
                    $this->CI->session->set_userdata('nama',$nama);
                    $this->CI->session->set_userdata('username',$username);
                    $this->CI->session->set_userdata('jabatan',$jabatan);
                    $this->CI->session->set_userdata('level',$level);
                    //jika sukses tampil halaman admin yang diproteksi
                    redirect(base_url('kepala_cabang/dashboard'),'refresh');
                }
            }else{
                $this->CI->log_model->log_gagal($username, $password);
                //Kalau username password salah, maka akan disuruh login lagi
                $this->CI->session->set_flashdata('warning','Akun Anda Telah Dinonaktifkan');
                redirect(base_url(),'refresh');
            }

        }else{
            $this->CI->log_model->log_gagal($username, $password);
            //Kalau username password salah, maka akan disuruh login lagi
            $this->CI->session->set_flashdata('warning','Username atau password salah');
            redirect(base_url(),'refresh');
        }
    }
    
    //Fungsi cek login
    public function cek_login()
    {
        //Mmeriksa apakah session sudah atau belum, jika belum alihkan ke halaman login
        if($this->CI->session->userdata('username') == ""){
            $this->CI->session->set_flashdata('warning','Anda belum login');
            redirect(base_url(),'refresh');
        }
    }
    
    //Fungsi logout
    public function logout()
    {
        // Membuang semua session yang telah diset pada saat login
        $this->CI->session->unset_userdata('id');
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('regional');
        $this->CI->session->unset_userdata('level');
        // Setelah session dibuang, maka dialihkan ke halaman login kembali
        $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
        redirect(base_url(),'refresh');
    }
}