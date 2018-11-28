<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model {
    function __construct()
    {
      parent::__construct();
      $this->load->library('session');

  }

  function ceklogin($user, $password, $table, $where,$person) {
    // cek inputan kosong
    if ($user == '' OR $password == '') {
        return false;
    }

    $this->db->where("username='$user' AND person='$person'");
    $query = $this->db->get_where($table);

            // username ada
    if ($query->num_rows() > 0) {
        $row = $query->row_array();
                // cek password
        if ($password != $row['password']) {
            return false;
        }

        $newdata = array( 
            'username' => $user,
            'logged_in' => TRUE 
            );

        $this->session->set_userdata($newdata);

        //$coba = $this->session->userdata('logged_in');
            //echo "<script> alert('$coba'); </script>";

                // login sukses
        return true;
    } else {
        return false;
    }
}

function cekloginPelanggan($kode = '' , $password = '', $table, $where) {
            // cek inputan kosong
    if ($kode == '' OR $password == '') {
        return false;
    }

    $this->db->where($where, $kode);
    $query = $this->db->get_where($table);

            // username ada
    if ($query->num_rows() > 0) {
        $row = $query->row_array();
                // cek password
        if ($password != $row['password']) {
            return false;
        }

        $newdata = array( 
            'username' => $kode,
            'logged_in' => TRUE 
            );

        $this->session->set_userdata($newdata);

                // login sukses
        return true;
    } else {
        return false;
    }
}


}


?>