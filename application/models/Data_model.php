<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Listing all jr_data
    public function listing()
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal($masa_awal)
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('masa_awal', $masa_awal);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir($masa_akhir)
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('masa_akhir', $masa_akhir);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_user($masa_awal)
    {
        $regional = $this->session->userdata('regional');
        $array = array('masa_awal' => $masa_awal, 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_user($masa_akhir)
    {
        $regional = $this->session->userdata('regional');
        $array = array('masa_akhir' => $masa_akhir, 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_belum($masa_awal)
    {
        $data = array('masa_awal' => $masa_awal, 'status' => "Belum Diproses");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_belum($masa_akhir)
    {
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Belum Diproses");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_belum_user($masa_akhir)
    {
        $regional = $this->session->userdata('regional');
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Belum Diproses", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_sudah($masa_awal)
    {
        $data = array('masa_awal' => $masa_awal, 'status' => "Sudah Diproses");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_sudah($masa_akhir)
    {
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Sudah Diproses");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_sudah_user($masa_akhir)
    {
        $regional = $this->session->userdata('regional');
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Sudah Diproses", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_sudah_user($masa_awal)
    {
        $regional = $this->session->userdata('regional');
        $data = array('masa_awal' => $masa_awal, 'status' => "Sudah Diproses", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_selesai($masa_awal)
    {
        $data = array('masa_awal' => $masa_awal, 'status' => "Selesai");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_selesai($masa_akhir)
    {
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Selesai");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_akhir_selesai_user($masa_akhir)
    {
        $regional = $this->session->userdata('regional');
        $data = array('masa_akhir' => $masa_akhir, 'status' => "Selesai", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_awal_selesai_user($masa_awal)
    {
        $regional = $this->session->userdata('regional');
        $data = array('masa_awal' => $masa_awal, 'status' => "Selesai", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_tp($tanggal_pelaksanaan)
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('tanggal_pelaksanaan', $tanggal_pelaksanaan);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_tp_user($tanggal_pelaksanaan)
    {
        $regional = $this->session->userdata('regional');
        $array = array('tanggal_pelaksanaan' => $tanggal_pelaksanaan, 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_tp_selesai($tanggal_pelaksanaan)
    {
        $data = array('tanggal_pelaksanaan' => $tanggal_pelaksanaan, 'status' => "Selesai");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function cetak_tp_selesai_user($tanggal_pelaksanaan)
    {
        $regional = $this->session->userdata('regional');
        $data = array('tanggal_pelaksanaan' => $tanggal_pelaksanaan, 'status' => "Selesai", 'jr_data.regional' => $regional);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum()
    {
        $status = "Belum Diproses";
        $this->db->select('jr_data.*,
                         jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah()
    {
        $status = "Sudah Diproses";
        $this->db->select('jr_data.*,
                         jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_user($regional)
    {
        $status = "Sudah Diproses";
        $data = array('regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                         jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_dumai()
    {
        $regional = "Dumai";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_dumai()
    {
        $regional = "Dumai";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_siak()
    {
        $regional = "Siak";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_siak()
    {
        $regional = "Siak";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_rohul()
    {
        $regional = "rohul";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_rohul()
    {
        $regional = "rohul";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_rohil()
    {
        $regional = "rohil";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_rohil()
    {
        $regional = "rohil";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_kuansing()
    {
        $regional = "Kuansing";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_kuansing()
    {
        $regional = "Kuansing";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_meranti()
    {
        $regional = "Meranti";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_meranti()
    {
        $regional = "Meranti";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_kampar()
    {
        $regional = "Kampar";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_kampar()
    {
        $regional = "Kampar";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_inhu()
    {
        $regional = "inhu";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_inhu()
    {
        $regional = "inhu";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_inhil()
    {
        $regional = "inhil";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_inhil()
    {
        $regional = "inhil";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_sudah_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_belum_user($regional)
    {
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai()
    {
        $status = "Selesai";
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_dumai()
    {
        $regional = "Dumai";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_siak()
    {
        $regional = "Siak";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_rohul()
    {
        $regional = "rohul";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_rohil()
    {
        $regional = "rohil";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_kuansing()
    {
        $regional = "Kuansing";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_meranti()
    {
        $regional = "Meranti";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_kampar()
    {
        $regional = "Kampar";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_inhu()
    {
        $regional = "inhu";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_inhil()
    {
        $regional = "inhil";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function data_selesai_user($regional)
    {
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function total_data()
    {
        $this->db->select('*');
        $this->db->from('jr_data');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function total_data_user($regional)
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('jr_data.regional', $regional);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function total_data_user2($regional)
    {
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where('jr_data.regional', $regional);
        $query = $this->db->get();
        return $query->result();
    }

    public function total_data_user3($regional)
    {
        $array = array('jr_data.regional' => $regional, 'status' => "Belum Diproses");
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->result();
    }

    public function belum_diproses()
    {
        $status = "Belum Diproses";
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses()
    {
        $status = "Sudah Diproses";
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_dumai()
    {
        $regional = "Dumai";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_dumai()
    {
        $regional = "Dumai";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_siak()
    {
        $regional = "Siak";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_siak()
    {
        $regional = "Siak";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_rohul()
    {
        $regional = "rohul";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_rohul()
    {
        $regional = "rohul";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_rohil()
    {
        $regional = "rohil";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_rohil()
    {
        $regional = "rohil";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_kuansing()
    {
        $regional = "Kuansing";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_kuansing()
    {
        $regional = "Kuansing";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_meranti()
    {
        $regional = "Meranti";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_meranti()
    {
        $regional = "Meranti";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_kampar()
    {
        $regional = "Kampar";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_kampar()
    {
        $regional = "Kampar";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_inhu()
    {
        $regional = "inhu";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_inhu()
    {
        $regional = "inhu";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_inhil()
    {
        $regional = "inhil";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_inhil()
    {
        $regional = "inhil";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Belum Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Sudah Diproses";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function belum_diproses_user($regional)
    {
        $status = "Belum Diproses";
        $array = array('regional' => $regional, 'status' => $status);
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function sudah_diproses_user($regional)
    {
        $status = "Sudah Diproses";
        $array = array('regional' => $regional, 'status' => $status);
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai()
    {
        $status = "Selesai";
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('status', $status);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_pekanbaru()
    {
        $regional = "Pekanbaru";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_dumai()
    {
        $regional = "Dumai";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_siak()
    {
        $regional = "Siak";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_rohul()
    {
        $regional = "rohul";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_rohil()
    {
        $regional = "rohil";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_pelalawan()
    {
        $regional = "Pelalawan";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_kuansing()
    {
        $regional = "Kuansing";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_meranti()
    {
        $regional = "Meranti";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_kampar()
    {
        $regional = "Kampar";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_inhu()
    {
        $regional = "inhu";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_inhil()
    {
        $regional = "inhil";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_bengkalis()
    {
        $regional = "Bengkalis";
        $status = "Selesai";
        $array = array('jr_data.regional' => $regional, 'status' => $status);
        $this->db->select('jr_data.*,
                           jr_regional.*');
        $this->db->join('jr_regional','jr_regional.regional = jr_data.regional','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function selesai_user($regional)
    {
        $status = "Selesai";
        $array = array('regional' => $regional, 'status' => $status);
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function hak_akses()
    {
        $this->db->select('*');
        $this->db->from('hak_akses');
        $this->db->order_by('id_hak_akses', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    // Detail data
    public function detail_admin($id)
    {
        $this->db->select('jr_data.*,
                           jr_user.nama, jr_user.jabatan');
        $this->db->join('jr_user','jr_user.id = jr_data.id_user','inner');
        $this->db->from('jr_data');
        $this->db->where('jr_data.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Detail data
    public function detail_user($id)
    {
        $id_user = $this->session->userdata('id');
        $array = array('jr_data.id' => $id, 'id_user' => $id_user);
        $this->db->select('jr_data.*,
                           jr_user.nama, jr_user.jabatan');
        $this->db->join('jr_user','jr_user.id = jr_data.id_user','inner');
        $this->db->from('jr_data');
        $this->db->where($array);
        $query = $this->db->get();
        return $query->row();
    }

    // Detail data
    public function detail($id)
    {
        $this->db->select('jr_data.*,
                           jr_user.nama, jr_user.jabatan, jr_user.ttd as userttd');
        $this->db->join('jr_user','jr_user.id = jr_data.id_user','inner');
        $this->db->from('jr_data');
        $this->db->where('jr_data.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Detail data
    public function gambar($id)
    {
        $this->db->select('*');
        $this->db->from('jr_gambar');
        $this->db->where('id_data', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Detail data
    public function detail_belum($id)
    {
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Detail data
    public function detail_sudah($id)
    {
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function detail_gambar($id)
    {
        $this->db->select('*');
        $this->db->from('jr_gambar');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function detail_gambar2($id)
    {
        $this->db->select('*');
        $this->db->from('jr_gambar');
        $this->db->where('id_data', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function detail_delete_gambar($id)
    {
        $this->db->select('*');
        $this->db->from('jr_gambar');
        $this->db->where('id_data', $id);
        $query = $this->db->get();
        return $query->result();
    }

    // Tambah
    public function tambah($data)
    {
        $this->db->insert('jr_data', $data);
    }

    public function getRows($id = ''){
        $this->db->select('*');
        $this->db->from('jr_gambar');
        if($id){
            $this->db->where('id',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    public function tambah_gambar($data){
        
        $this->db->insert('jr_gambar',$data);
    }

    // Edit
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('jr_data', $data);
    }


    // Delete
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('jr_data', $data);
    }
    
    // Detail data
    public function detail_delete($id)
    {
        $this->db->select('*');
        $this->db->from('jr_data');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Delete
    public function delete_gambar($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('jr_gambar', $data);
    }

    // Delete
    public function delete_gambar2($id)
    {
        $this->db->where('id_data', $id);
        $this->db->delete('jr_gambar');
    }

    function insert($data)
    {
        $this->db->insert_batch('jr_data', $data);
    }
}
?>