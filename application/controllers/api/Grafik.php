<?php
require APPPATH . 'libraries/REST_Controller.php';
     
class Grafik extends REST_Controller {
    
	/**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->model('data_model');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($regional = 0)
    {
        if(!empty($regional)){
            $total_data = $this->data_model->total_data_user($regional);
            $belum_diproses = $this->data_model->belum_diproses_user($regional);
            $sudah_diproses = $this->data_model->sudah_diproses_user($regional);
            $selesai = $this->data_model->selesai_user($regional);
            $this->response(['total_data' => $total_data,
                             'belum_diproses' => $belum_diproses,
                             'selesai'      => $selesai,
                ], REST_Controller::HTTP_OK);
        }else {
            $total_data = $this->data_model->total_data();
            $belum_diproses = $this->data_model->belum_diproses();
            $sudah_diproses = $this->data_model->sudah_diproses();
            $selesai = $this->data_model->selesai();
            $this->response(['total_data' => $total_data,
                             'belum_diproses' => $belum_diproses,
                             'sudah_diproses' => $sudah_diproses,
                             'selesai'      => $selesai,
                ], REST_Controller::HTTP_OK);
        }
    }

}