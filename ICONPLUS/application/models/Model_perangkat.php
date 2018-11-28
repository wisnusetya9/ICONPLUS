<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_perangkat extends CI_Model
{

    public $table = 'tb_perangkat';
    public $id = 'id_perangkat';
    public $kode_rak = 'kode_rak';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->kode_rak, $id);
        return $this->db->get($this->table)->row();
    }
     function get_by_id2($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
    $this->db->like('id_perangkat', $q);
	$this->db->or_like('Kode_perangkat', $q);
    $this->db->or_like('nama_perangkat', $q);
    $this->db->or_like('Keterangan_Perangkat', $q);
    $this->db->or_like('Merk', $q);
    $this->db->or_like('Tipe', $q);
    $this->db->or_like('Capasitas', $q);
    $this->db->or_like('Foto_perangkat', $q);
    $this->db->or_like('Foto_perangkat2', $q);
    $this->db->or_like('File_perangkat', $q);
    $this->db->or_like('Tanggal_input', $q);
    $this->db->or_like('kode_room', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
    $this->db->like('id_perangkat', $q);
    $this->db->or_like('Kode_perangkat', $q);
    $this->db->or_like('nama_perangkat', $q);
    $this->db->or_like('Keterangan_Perangkat', $q);
    $this->db->or_like('Merk', $q);
    $this->db->or_like('Tipe', $q);
    $this->db->or_like('Capasitas', $q);
    $this->db->or_like('Foto_perangkat', $q);
    $this->db->or_like('Foto_perangkat2', $q);
    $this->db->or_like('File_perangkat', $q);
    $this->db->or_like('Tanggal_input', $q);
    $this->db->or_like('kode_room', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($data)
    {
        $this->db->insert($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}