<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all user
    public function listing($username)
    {
        $this->db->select('*');
        $this->db->from('jr_user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->row();
    }

    public function kepalacabang()
    {
        $this->db->select('*');
        $this->db->from('jr_user');
        $this->db->where('id_level = "5"');
        $query = $this->db->get();
        return $query->row();
    }

    //Login
    public function login($username,$password)
    {
        $this->db->select('jr_user.*,
                          jr_regional.*'
                         );
        $this->db->from('jr_user');
        $this->db->join('jr_regional','jr_regional.regional = jr_user.regional','left');
        // JOIN
        $this->db->where(array('username' => $username,
                               'password' => $password,
                               'level'));
        $query = $this->db->get();
        return $query->row();
    }
}
?>