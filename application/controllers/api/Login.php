<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Login extends REST_Controller 
{

	public function __construct() 
	{
       parent::__construct();
       $this->load->model('user_model');
    }

    public function index_post()
    {
    	// Get the post data
        $username = $this->post('username');
        $pw = $this->post('password');
        $password = md5($pw);
        
        $check = $this->user_model->login($username,$password);
        // Validate the post data
        if($check){
        	$status = $check->status;
        	if($status == 'Aktif')
            {
        		$this->response([
        			'value' => 1,
        			'id'	=>	$check->id,
        			'kode_samsat'	=>	$check->kode_samsat,
        			'cabang'	=>	$check->cabang,
        			'alamat'	=>	$check->alamat,
        			'username' => $check->username,
        			'nama'	=>	$check->nama,
        			'no_telpon'	=>	$check->no_telpon,
        			'jabatan'	=>	$check->jabatan,
        			'regional'	=>	$check->regional,
                    'nama_regional' => $check->nama_regional,
                    'id_level' => $check->id_level,
                    'ttd' => $check->ttd
        	   ], REST_Controller::HTTP_OK);
            	
            }else{
            	$this->response([
            		'value' => 0,
            		'pesan' => "Akun anda telah dinonaktifkan"], REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            // Set the response and exit
            $this->response([
            	'value' => 0,
            	'pesan' => "Username atau password salah"], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put($id = 0)
    {
        $input = $this->put();
        $this->db->update('jr_user', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
}
?>