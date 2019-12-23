<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samsat_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('jr_samsat');
        $query = $this->db->get();
        return $query->result();
    }
}
?>