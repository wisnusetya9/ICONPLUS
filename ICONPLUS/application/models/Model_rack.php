<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_rack extends CI_Model
{

    public $table = 'tb_rak';
    public $id = 'id_rak';
    public $order = 'DESC';
    public $kode = 'Kode_rak';

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
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    function get_by_id2($id)
    {
        $this->db->where($this->kode, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_rak', $q);
    $this->db->or_like('Kode_rak', $q);
    $this->db->or_like('nama_rak', $q);
    $this->db->or_like('kode_room', $q);
    $this->db->or_like('kode_pop', $q);
    $this->db->or_like('Foto_Rak', $q);
    $this->db->or_like('Foto_Rak2', $q);
    $this->db->or_like('File_Rak', $q);
    $this->db->or_like('tgl_upload_rak', $q);
    $this->db->or_like('wkt_upload_rak', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
       $this->db->like('id_rak', $q);
    $this->db->or_like('Kode_rak', $q);
    $this->db->or_like('nama_rak', $q);
    $this->db->or_like('kode_room', $q);
    $this->db->or_like('kode_pop', $q);
    $this->db->or_like('Foto_Rak', $q);
    $this->db->or_like('Foto_Rak2', $q);
    $this->db->or_like('File_Rak', $q);
    $this->db->or_like('tgl_upload_rak', $q);
    $this->db->or_like('wkt_upload_rak', $q);
    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_rak($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
    

}