<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regional_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('jr_regional');
        $this->db->order_by('regional', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}
?>