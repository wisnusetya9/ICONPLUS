<?php

class Login extends CI_Controller {

	function index()
	{
		$this->load->view('login_view');
	}
	
	function login(){
		$username = $this->input->post('username');
        $password = $this->input->post('password');
		$this->load->model('Login');
		if ($this->Login->ceklogin($username, $password, 'user', 'username')) {
            redirect('Home/index', 'refresh');
        } else {
            $this->index();
        }	
	}
	
	function logout() {
        $this->session->sess_destroy();
       redirect('Login/index', 'refresh');
    }
	
	
}
?>