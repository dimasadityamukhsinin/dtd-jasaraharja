<?php
require APPPATH . 'libraries/REST_Controller.php';
     
class Data extends REST_Controller {
    
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
            $total_data = $this->data_model->total_data_user3($regional);
            $this->response($total_data
                , REST_Controller::HTTP_OK);
        }else {
            $total_data = $this->data_model->listing();
            $this->response($total_data
                , REST_Controller::HTTP_OK);
        }
    }

    public function index_post($id = 0)
    {

        $input = $this->input->post();
        $this->db->insert('jr_data',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 

    public function index_put($id = 0)
    {
        $input = $this->put();
        $this->db->update('jr_data', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_delete($id)
    {
        $selesai     = $this->data_model->detail_delete($id);

        if($selesai->ttd != null) {
            unlink('assets/upload/image/'.$selesai->ttd);
        }else {
            $this->db->delete('jr_data', array('id'=>$id));
        }
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

}