<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all user
    public function listing()
    {
        $this->db->select('jr_user.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_user.regional','inner');
        $this->db->from('jr_user');
        $this->db->where('id_level = 3');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('jr_user', $data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('jr_user', $data);
    }

    // Detail data
    public function detail($id)
    {
        $this->db->select('jr_user.*, jr_level.*');
        $this->db->from('jr_user');
        $this->db->join('jr_level','jr_level.id_level = jr_user.id_level','inner');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Delete
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('jr_user', $data);
    }

    public function cek_old()
    {
        $old = md5($this->input->post('pw_lama'));    $this->db->where('password',$old);
        $query = $this->db->get('jr_user');
        return $query->result();
    }

    public function save($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('jr_user', $data);
    }
}
?>