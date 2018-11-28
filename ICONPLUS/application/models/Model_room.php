<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_room extends CI_Model
{

    public $table = 'tb_room';
    public $id = 'id';
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
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
    $this->db->like('id', $q);
	$this->db->or_like('Kode_room', $q);
    $this->db->or_like('nama_room', $q);
    $this->db->or_like('Foto_Room', $q);
    $this->db->or_like('Foto_Room2', $q);
    $this->db->or_like('File_Room', $q);
    $this->db->or_like('tgl_upload_room', $q);
    $this->db->or_like('wkt_upload_room', $q); 
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
        $this->db->or_like('Kode_room', $q);
        $this->db->or_like('nama_room', $q);
        $this->db->or_like('Foto_Room', $q);
        $this->db->or_like('Foto_Room2', $q);
        $this->db->or_like('File_Room', $q);
        $this->db->or_like('tgl_upload_room', $q);
        $this->db->or_like('wkt_upload_room', $q);     
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update_room($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
      public function get_all1($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Tipe_POP', 'POP SB')->get($this->table);
        return $query->result();
    }

     public function get_all2($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Tipe_POP', 'POP BB')->get($this->table);
        return $query->result();
    }

     public function get_total1() // sama ini juga dipake untuk paging data
    {
        return $this->db->count_all($this->table);
    }

    public function get_all_search($limit, $page,$srch) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $this->db->where("(nama_room like '%$srch%') OR (kode_room like '%$srch%') OR (kode_pop like '%$srch%') ");
        $query  = $this->db->limit($limit, $offset)->get($this->table);
        return $query->result();
    }

    // delete data
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}