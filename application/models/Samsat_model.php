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
        $this->db->distinct();
		$this->db->select('tahun');
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
    
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('jr_samsat');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('jr_samsat', $data);
    }

    function insert($data)
    {
        $this->db->insert_batch('jr_samsat', $data);
    }

    public function GrafikIW()
	{
		$this->db->select('tahun as tahun, SUM(iwkbu) as iwkbu, SUM(iwkl) as iwkl');
		$this->db->from('jr_samsat');
		$this->db->group_by('tahun');
		return $this->db->get();
    }
    
    // Delete
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('jr_samsat', $data);
    }
}
?>