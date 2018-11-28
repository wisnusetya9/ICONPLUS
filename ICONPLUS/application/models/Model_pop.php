<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_pop extends CI_Model
{

    public $table = 'tb_pop';
    public $id_pop = 'id_pop';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id_pop, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id_pop($id_pop)
    {
        $this->db->where($this->id_pop, $id_pop);
        return $this->db->get($this->table)->row();

    }
    function get_by_id_pop2($id_pop)
    {
        $this->db->where("Kode_POP like '%$id_pop%'");
        return $this->db->get($this->table)->row();

    }
    
    
    // get total rows
    function total_rows($q = NULL) {
    $this->db->order_by($this->id_pop, $this->order);
    $this->db->or_like('id_pop', $q);
    $this->db->or_like('Kode_POP', $q);
    $this->db->or_like('Alamat_POP', $q);
    $this->db->or_like('Koordinat_POP', $q);
    $this->db->or_like('CyberKey', $q);
    $this->db->or_like('Foto_POP', $q);
    $this->db->or_like('Foto_POP2', $q);
    $this->db->or_like('Keterangan', $q);
    $this->db->or_like('Area_POP', $q);
    $this->db->or_like('Tipe_POP', $q);
    $this->db->or_like('File_POP', $q);
    $this->db->or_like('Tgl_upload', $q);
    $this->db->or_like('Wkt_upload', $q);
    $this->db->from($this->table);
        return $this->db->count_all_results();
        
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by($this->id_pop, $this->order);
    $this->db->or_like('id_pop', $q);
    $this->db->or_like('Kode_POP', $q);
    $this->db->or_like('Alamat_POP', $q);
    $this->db->or_like('Koordinat_POP', $q);
    $this->db->or_like('CyberKey', $q);
    $this->db->or_like('Foto_POP', $q);
    $this->db->or_like('Foto_POP2', $q);
    $this->db->or_like('Keterangan', $q);
    $this->db->or_like('Area_POP', $q);
    $this->db->or_like('Tipe_POP', $q);
    $this->db->or_like('File_POP', $q);
    $this->db->or_like('Tgl_upload', $q);
    $this->db->or_like('Wkt_upload', $q);

    $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id_pop, $data)
    {
        $this->db->where($this->id_pop, $id_pop);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id_pop)
    {
        $this->db->where($this->id_pop, $id_pop);
        $this->db->delete($this->table);
    }

    public function get_total1() // sama ini juga dipake untuk paging data
    {
        return $this->db->count_all($this->table);
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
     public function get_all3($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Tipe_POP', 'POP D')->get($this->table);
        return $query->result();
    }
     public function get_all4($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Area_POP', 'Area Barat')->get($this->table);
        return $query->result();
    }

     public function get_all5($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Area_POP', 'Area Pusat')->get($this->table);
        return $query->result();
    }

     public function get_all6($limit, $page) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $query  = $this->db->limit($limit, $offset)->where('Area_POP', 'Area Timur')->get($this->table);
        return $query->result();
    }

 public function get_all_search($limit, $page,$srch) // ini model yg dipake pagingnya
    {     
        $offset = ($page - 1) * $limit;
        $this->db->where("(Kode_POP like '%$srch%') OR (Tipe_POP like '%$srch%') OR (Area_POP like '%$srch%') ");
        $query  = $this->db->limit($limit, $offset)->where('Tipe_POP', 'POP SB')->get($this->table);
        return $query->result();
    }
  
}