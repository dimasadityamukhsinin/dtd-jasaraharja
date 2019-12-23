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

    public function tahun_anggaran()
	{
		$this->db->select('DISTINCT tahun as tahun');
		$this->db->order_by('tahun', 'ASC');
		$query = $this->db->get('jr_samsat');
		return $query->result();
	}
    
    public function getAnggaran($tahun)
	{
		$this->db->select('*');
		$this->db->from('jr_samsat');
		$this->db->order_by('id', 'asc');
		$this->db->where('tahun',$tahun);
		$query = $this->db->get();
		return $query->result();
	}
}
?>