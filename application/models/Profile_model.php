<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all profile
    public function listing($username)
    {
        $this->db->select('*');
        $this->db->from('jr_user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    public function edit($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->update('jr_user', $data);
    }


    public function save($data)
    {
        $this->db->where('username', $data['username']);
        $this->db->update('jr_user', $data);
    }

    public function cek_old()
    {
        $old = md5($this->input->post('pw_lama'));    $this->db->where('password',$old);
        $query = $this->db->get('jr_user');
        return $query->result();
    }
}
?>