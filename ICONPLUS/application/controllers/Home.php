<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_home');
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		/*$data['login'] = $this->Login->get_login()->result();*/
		
		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/SB/home');
		}else if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/SB/home');
		}else{
			$this->load->view('user/home');
		}

	}

	// public function index2()
	// {
	// 	/*$data['login'] = $this->Login->get_login()->result();*/
		
	// 	if($this->session->userdata('subadmin')!=''){
	// 		$this->load->view('subadmin/SB/home');
	// 	}else{
	// 		$this->load->view('user/home');
	// 		}

	// } 
}