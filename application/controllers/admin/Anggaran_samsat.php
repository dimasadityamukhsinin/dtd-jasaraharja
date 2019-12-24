<?php
defined('BASEPATH') or exit('No script access allowed');

class Anggaran_samsat extends CI_Controller {

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

    // Data Anggaran Samsat
    public function index()
    {
		$tahun = $this->input->post('tahun');

		$thn = '';
		if($tahun == ''){
			$thn = date('Y');
		}else{
			$thn = $tahun;
		}

		$anggaran = $this->samsat_model->getAnggaran($thn);
        $tahunAnggaran = $this->samsat_model->tahun_anggaran();
        
        $konfigurasi = $this->konfigurasi_model->listing();
        $username = $this->session->userdata('username');
        $admin = $this->user_model->listing($username);

        $data = array(  'title'         =>  'Anggaran Tahunan Samsat',
                        'admin'         =>  $admin,
                        'konfigurasi'   =>  $konfigurasi,
                        'anggaran'      =>  $anggaran,
                        'tahunAnggaran' =>  $tahunAnggaran,
                        'tahun'         => $thn,
                        'isi'           =>  'admin/anggaran_samsat/list'
                    );
        $this->load->view('admin/layout/wrapper', $data, false);
    }

    //Edit Anggaran Samsat
    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        $konfigurasi = $this->konfigurasi_model->listing();
        $username = $this->session->userdata('username');
        $admin = $this->user_model->listing($username);

        //Ambil data yg akan diedit
        $anggaran     = $this->samsat_model->detail($id);
        //validasi input
        $valid      = $this->form_validation;

        $valid->set_rules('iwkbu', 'IWKBU', 'required',
                    array('required'    =>  "%s Harus diisi"));

        $valid->set_rules('iwkl', 'IWKL', 'required',
                    array('required'    =>  "%s Harus diisi"));
        
        if($valid->run()===false){
            //Akhir Validasi
        
        $data = array(  'title'     =>  'Edit Anggaran '.$anggaran->nama_samsat,
                        'konfigurasi'   =>  $konfigurasi,
                        'admin'    =>  $admin,
                        'anggaran' => $anggaran,
                        'isi'       =>  'admin/anggaran_samsat/edit'
                    );
        $this->load->view('admin/layout/wrapper', $data, false);
        if(!$anggaran) show_404();
        //masuk database
        }else{
            $i = $this->input;
            
            $data = array(  'id'    =>  $id,
                            'iwkbu'         =>  $i->post('iwkbu'),
                            'iwkl'       =>  $i->post('iwkl'),
                        );
            $this->samsat_model->edit($data);
            $this->session->set_flashdata('sukses', 'Data telah diedit');
            redirect(base_url('admin/anggaran_samsat'), 'refresh');
        }
        //akhir masuk database
            
        $data = array(  'title'     =>  'Edit Anggaran '.$anggaran->nama_samsat,
                        'konfigurasi'   =>  $konfigurasi,
                        'admin'    =>  $admin,
                        'anggaran' => $anggaran,
                        'isi'       =>  'admin/anggaran_samsat/edit'
                    );
        $this->load->view('admin/layout/wrapper', $data, false);
    }

    function import()
    {
        if(isset($_FILES["file"]["name"]))
        {
            $path = $_FILES["file"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach($object->getWorksheetIterator() as $worksheet)
            {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for($row=4; $row<=$highestRow; $row++)
                {
                    $tahun = $worksheet->getCellByColumnAndRow(1, 1)->getValue();
                    $wilayah = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $iwkbu = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $iwkl = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $nol = 0;
                    $data[] = array(
                        'nama_samsat'      =>  $wilayah,
                        'iwkbu'           =>  $iwkbu == null ? $nol : $iwkbu,
                        'iwkl'              =>  $iwkl == null ? $nol : $iwkl,
                        'tahun'        =>  $tahun,
                    );
                }
            }
            $this->samsat_model->insert($data);
            $this->session->set_flashdata('sukses','Data telah diimport');
            redirect(base_url('admin/anggaran_samsat'),'refresh');        
        }  
    }
}
?>