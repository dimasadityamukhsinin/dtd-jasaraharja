<?php
require APPPATH . 'libraries/REST_Controller.php';
     
class Samsat extends REST_Controller {
    
	/**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->model('samsat_model');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get()
    {
        $samsat = $this->samsat_model->samsat();
        $this->response($samsat
            , REST_Controller::HTTP_OK);
    }

}