<?php
require APPPATH . 'libraries/REST_Controller.php';
     
class Profil extends REST_Controller {
    
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
        if(empty($id)) {
            $gambar = $_FILES['image']['name'];
            $config['upload_path']      = './assets/upload/image/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = '2400';//Dalam KB
            $config['max_width']        = '2024';
            $config['max_height']       = '2024';
            
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
            $upload_gambar = array('upload_data' => $this->upload->data());
                        
            //Buat thumbnail gambar
            $config['image_library']    = 'gd2';
            $config['source_image']     = './assets/upload/image/'.$upload_gambar['upload_data']['file_name'];

            $i = $this->input;
                    
            $data = array(  //Disimpan nama file gambar
                            'foto'          =>  $upload_gambar['upload_data']['file_name'],
                        );
            $this->data_model->tambah_gambar($data);
        }else {

        }

        $input = $this->input->post();
        $this->db->insert('jr_data',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 

    public function index_put($id = 0)
    {
        $input = $this->put();
        $this->db->update('jr_user', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }

    public function index_delete($id)
    {
        $this->db->delete('jr_data', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

}