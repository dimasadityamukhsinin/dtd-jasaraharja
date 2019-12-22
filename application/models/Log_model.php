<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function listing()
    {
        $this->db->select('*');
        $this->db->from('jr_log');
        $this->db->order_by('waktu', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function log_sukses($username, $password)
    {
        $waktu = date("Y-m-d H:i:s");
        $keterangan = "sukses";
        $data = array(  'waktu'   =>  $waktu,
        'username' =>  $username,
        'password'  =>  $password,
        'keterangan' => $keterangan); 
        $this->db->insert('jr_log', $data);
    }

    public function log_gagal($username, $password)
    {
        $waktu = date("Y-m-d H:i:s");
        $keterangan = "gagal";
        $data = array(  'waktu'   =>  $waktu,
        'username' =>  $username,
        'password'  =>  $password,
        'keterangan' => $keterangan); 
        $this->db->insert('jr_log', $data);
    }
}
?>