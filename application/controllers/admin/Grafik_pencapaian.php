<?php
defined('BASEPATH') or exit('No script access allowed');

class Grafik_pencapaian extends CI_Controller {

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

    public function index()
    {
        $data1 = array();
		foreach($this->samsat_model->GrafikIW()->result_array() as $row)
			$data1[] = floatval($row['tahun']);

		$data2 = array();
		foreach($this->samsat_model->GrafikIW()->result_array() as $row)
			$data2[] = floatval($row['iwkbu']);

		$data3 = array();
		foreach($this->samsat_model->GrafikIW()->result_array() as $row)
			$data3[] = floatval($row['iwkl']);

        $konfigurasi = $this->konfigurasi_model->listing();
        $username = $this->session->userdata('username');
        $admin = $this->user_model->listing($username);

        $dataArray = array('data1' => $data1, 'iwkl' => $data3, 'iwkbu' => $data2);

        $data = array(  'title'         =>  'Grafik Pencapaian Samsat',
                        'konfigurasi'   =>  $konfigurasi,
                        'admin'         =>  $admin,
                        'data1'         =>  $data1,
                        'iwkbu'         =>  $data2,
                        'iwkl'          =>  $data3,
                        'isi'           =>  'admin/grafik_pencapaian/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
?>