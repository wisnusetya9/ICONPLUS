<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Ctrl_popd extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_pop');
		$this->load->model('Model_room');
		$this->load->model('Model_rack');
		$this->load->model('Model_login');
		$this->load->model('Model_perangkat');
		$this->load->library('form_validation');
		$this->load->library('pagination');

	}

	public function popd_Data($page = 1)
    {
        $total = $this->Model_pop->get_total1();
        //ambil data
        $limit  =2; //menentukan limit/jumlah data yang akan ditampilkan per page
        $result = $this->Model_pop->get_all3($limit, $page);
        $url = site_url('Ctrl_popdd/popd_Data/');
        $this->load->library('pagination');
        $config['base_url']         = $url;
        $config['total_rows']       = $total;
        $config['per_page']         = $limit;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 2;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        $data['result']     = $result;
        $data['pagination'] = $pagination;
		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/list_popd', $data);
		}else if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/list_popd', $data);
		}else {
			$this->load->view('user/D/list_popd', $data);
		}
    }
   
public function search_Data($page, $srch)
    {
        $total = $this->Model_pop->get_total1();
        //ambil data
        $limit  =2; //menentukan limit/jumlah data yang akan ditampilkan per page
       	$result = $this->Model_pop->get_all_search($limit, $page, $srch);	
      
        $url = site_url('Ctrl_popdd/popd_Data');
        $this->load->library('pagination');
        $config['base_url']         = $url;
        $config['total_rows']       = $total;
        $config['per_page']         = $limit;
        $config['use_page_numbers'] = true;
        $config['num_links']        = 2;
        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="prev">';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        $data['result']     = $result;
        $data['pagination'] = $pagination;
       
		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/search_pop', $data);
		}else if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/search_pop', $data);
		}else{
			$this->load->view('user/D/search_pop', $data);
		}
    }

  
public function detail()
{
	$this->load->view('Detail_popd');
}
	public function read($id_pop) 
	{
 
		$row = $this->Model_pop->get_by_id_pop($id_pop);
		if ($row) {
			$room=$row->Kode_POP;
			$data = array(
				'id_pop' => $row->id_pop,
				'Kode_POP' => $row->Kode_POP,
				'Alamat_POP' => $row->Alamat_POP,
				'Koordinat_POP' => $row->Koordinat_POP,
				'CyberKey' => $row->CyberKey,
				'Area_POP' =>$row->Area_POP,
				'Tipe_POP'=>$row->Tipe_POP,
				'Foto_POP' => $row->Foto_POP,
				'Foto_POP2' => $row->Foto_POP2,
				'Keterangan' => $row->Keterangan,
				'File_POP' => $row->File_POP,
				'Tgl_upload' => $row->Tgl_upload,
				'Wkt_upload' => $row->Wkt_upload,
				'room' => $this->db->query("SELECT * FROM tb_room where kode_pop='$room'")->result(),
				'button' => 'Create',
				'action' => site_url('Ctrl_popd/create_action_room/'.$id_pop),
				'kode_room' => set_value('kode_room'),
				'nama_room' => set_value('nama_room'),	
				'Foto_Room' => set_value('Foto_Room'),
				'Foto_Room2' => set_value('Foto_Room2'),
				'File_Room' => set_value('File_Room'),
				'tgl_upload_room' => set_value('tgl_upload_room'),
				'wkt_upload_room' => set_value('wkt_upload_room'),		
				'kode_pop' => set_value('kode_pop',$row->Kode_POP),
				
				);

			if($this->session->userdata('admin')!=''){
				$this->load->view('admin/D/Detail_popd', $data);
			}else if($this->session->userdata('subadmin')!=''){
				$this->load->view('subadmin/D/Detail_popd', $data);
			}else{
				$this->load->view('user/D/Detail_popd', $data);
			}

		} else {
			// $this->session->set_flashdata('message', 'Recofddfrd Not Found');
			if($this->session->userdata('admin')!=''){
			redirect(site_url('admin/D/list_popd'));
			}else if($this->session->userdata('subadmin')!=''){
			redirect(site_url('subadmin/D/list_popd'));
			}else{
			redirect(site_url('user/D/list_popd'));
			}
		}
	}

public function back()
	{
		redirect(site_url('Ctrl_popd/popd_Data/'));
	}
public function back_room($id_pop)
	{
		redirect(site_url('Ctrl_popdd/read/'.$room->id));
	}
public function back_update_rack()
	{
		redirect(site_url('Ctrl_popd/createRak'));
	}

	

	public function create() 
{
		$data = array(
			'button' => 'Create',
			'action' => site_url('Ctrl_popd/create_action/'),
			'id_pop' => set_value('id_pop'),
			'Kode_POP' => set_value('Kode_POP'),
			'Alamat_POP' => set_value('Alamat_POP'),
			'Koordinat_POP' => set_value('Koordinat_POP'),
			'CyberKey' => set_value('CyberKey'),
			'Keterangan' => set_value('Keterangan'),
			'Tipe_POP' => set_value('Tipe_POP'),
			'Area_POP' => set_value('Area_POP'),
			'Foto_POP' => set_value('Foto_POP'),
			'Foto_POP2' => set_value('Foto_POP2'),			
			'File_POP' => set_value('File_POP'),
			'Tgl_upload' => set_value('Tgl_upload'),
			'Wkt_upload' => set_value('Wkt_upload'),
			
			);
		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/insert_popd', $data);
		}else if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/insert_popd', $data);
		}else{
			$this->load->view('user/D/insert_popd', $data);
			}
	}

	public function create_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
			$input = array(
				// 'id_pop' => $this->input->post('id_pop',TRUE),
				'Kode_POP' => $this->input->post('Kode_POP',TRUE),
				'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
				'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
				'CyberKey' => $this->input->post('CyberKey',TRUE),				
				'Keterangan' => $this->input->post('Keterangan',TRUE),
				'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
				'Area_POP' => $this->input->post('Area_POP',TRUE),				
				'Foto_POP' => $stringedit,
				'Foto_POP2' => $stringedit3,
				'File_POP' => $stringedit2,
				'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
				'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),	

				);

			$data['input']=$input;
			$this->load->library('upload');
			$config['upload_path'] = 'public/POP/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_POP') || !$this->upload->do_upload('Foto_POP2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/popd_Data/'));
			} else {
				unset($config);
				$config['upload_path'] = 'public/POP/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_POP')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/popd_Data'));
				} else {
					$this->Model_pop->insert($input);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('Ctrl_popd/popd_Data'));

				}
			}
		}
	}

	public function update($id_pop) 
	{
		$row = $this->Model_pop->get_by_id_pop($id_pop);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('Ctrl_popd/update_action/'),
				'id_pop' => set_value('id_pop', $row ->id_pop),
				'Kode_POP' => set_value('Kode_POP',$row ->Kode_POP),
				'Alamat_POP' => set_value('Alamat_POP',$row->Alamat_POP),
				'Koordinat_POP' => set_value('Koordinat_POP',$row->Koordinat_POP),
				'CyberKey' => set_value('CyberKey',$row->CyberKey),
				'Keterangan' => set_value('Keterangan',$row->Keterangan),
				'Tipe_POP' => set_value('Tipe_POP',$row->Tipe_POP),
				'Area_POP' => set_value('Area_POP',$row->Area_POP),				
				'Foto_POP' => set_value('Foto_POP',$row->Foto_POP),
				'Foto_POP2' => set_value('Foto_POP2',$row->Foto_POP2),
				'File_POP' => set_value('File_POP',$row->File_POP),
				'Tgl_upload' => set_value('Tgl_upload',$row->Tgl_upload),
				'Wkt_upload' => set_value('Wkt_upload',$row->Wkt_upload),
				);

		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/update_popd', $data);
		}else 
		if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/update_popd', $data);
		}else{
			$this->load->view('user/update_popd', $data);
			}

		} else {
			$this->session->set_flashdata('message', 'Record Nonknknt Found');
			redirect(site_url('Ctrl_popdd/popd_Data'));
		}
	}

	public function update_action($id_pop) 
    {

    	$this->_rules();

    	if ($this->form_validation->run() == FALSE) {
    		$this->update($this->input->post('id_pop', TRUE));
    	} else {
    		if ($_FILES['Foto_POP']['name'] AND $_FILES['Foto_POP2']['name'] AND $_FILES['File_POP']['name']) {
    		$stringasli = $this->input->post('nama_file',TRUE);
    		$stringedit =  str_replace(" ", "_", $stringasli);
    		$stringasli2 = $this->input->post('nama_file1',TRUE);
    		$stringedit2 =  str_replace(" ", "_", $stringasli2);			
    		$stringasli3 = $this->input->post('nama_file3',TRUE);
    		$stringedit3 =  str_replace(" ", "_", $stringasli3);
    		$data = array(
    			'id_pop' => $this->input->post('id_pop',TRUE),
    			'Kode_POP' => $this->input->post('Kode_POP',TRUE),
    			'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
    			'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
    			'CyberKey' => $this->input->post('CyberKey',TRUE),				
    			'Keterangan' => $this->input->post('Keterangan',TRUE),
    			'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
    			'Area_POP' => $this->input->post('Area_POP',TRUE),				
    			'Foto_POP' => $stringedit,
    			'Foto_POP2' => $stringedit3,
    			'File_POP' => $stringedit2,
    			'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
    			'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),
    			);
    		$this->load->library('upload');
    		$config['upload_path'] = 'public/POP/Foto';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['overwrite'] = FALSE;
    		$this->upload->initialize($config);
    		
    			if (!$this->upload->do_upload('Foto_POP') || !$this->upload->do_upload('Foto_POP2')) {
    				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
    				redirect(site_url('Ctrl_popdd/update'));
    			} else {
    				unset($config);
    				$config['upload_path'] = 'public/POP/File';
    				$config['allowed_types'] = '*';
    				$config['overwrite'] = FALSE;
    				$this->upload->initialize($config);
    				if (!$this->upload->do_upload('File_POP')) {
    					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
    					redirect(site_url('Ctrl_popdd/update'));
    				} else {
    					$this->Model_pop->update($this->input->post('id_pop', TRUE), $data);
    					$this->session->set_flashdata('message', 'Update Record Success');
    					redirect(site_url('Ctrl_popdd/update'));
    				}
    			}
    		}
    		if ($_FILES['Foto_POP']['name']) {
    		$stringasli = $this->input->post('nama_file',TRUE);
    		$stringedit =  str_replace(" ", "_", $stringasli);
    		$stringasli2 = $this->input->post('nama_file1',TRUE);
    		$stringedit2 =  str_replace(" ", "_", $stringasli2);			
    		$stringasli3 = $this->input->post('nama_file3',TRUE);
    		$stringedit3 =  str_replace(" ", "_", $stringasli3);
    		$data = array(
    			'id_pop' => $this->input->post('id_pop',TRUE),
    			'Kode_POP' => $this->input->post('Kode_POP',TRUE),
    			'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
    			'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
    			'CyberKey' => $this->input->post('CyberKey',TRUE),				
    			'Keterangan' => $this->input->post('Keterangan',TRUE),
    			'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
    			'Area_POP' => $this->input->post('Area_POP',TRUE),				
    			'Foto_POP' => $stringedit,
    			'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
    			'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),
    			);
    		$this->load->library('upload');
    		$config['upload_path'] = 'public/POP/Foto';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['overwrite'] = FALSE;
    		$this->upload->initialize($config);
    		
    			if (!$this->upload->do_upload('Foto_POP')) {
    				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
    				redirect(site_url('Ctrl_popdd/update'));
    			} else {
    					$this->Model_pop->update($this->input->post('id_pop', TRUE), $data);
    					$this->session->set_flashdata('message', 'Update Record Success');
    					redirect(site_url('Ctrl_popdd/update'));
    				}
    			
    		}
    		if ($_FILES['Foto_POP2']['name']) {
    		$stringasli = $this->input->post('nama_file',TRUE);
    		$stringedit =  str_replace(" ", "_", $stringasli);
    		$stringasli2 = $this->input->post('nama_file1',TRUE);
    		$stringedit2 =  str_replace(" ", "_", $stringasli2);			
    		$stringasli3 = $this->input->post('nama_file3',TRUE);
    		$stringedit3 =  str_replace(" ", "_", $stringasli3);
    		$data = array(
    			'id_pop' => $this->input->post('id_pop',TRUE),
    			'Kode_POP' => $this->input->post('Kode_POP',TRUE),
    			'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
    			'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
    			'CyberKey' => $this->input->post('CyberKey',TRUE),				
    			'Keterangan' => $this->input->post('Keterangan',TRUE),
    			'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
    			'Area_POP' => $this->input->post('Area_POP',TRUE),				
    			'Foto_POP2' => $stringedit3,
    			'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
    			'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),
    			);
    		$this->load->library('upload');
    		$config['upload_path'] = 'public/POP/Foto';
    		$config['allowed_types'] = 'jpg|png|jpeg';
    		$config['overwrite'] = FALSE;
    		$this->upload->initialize($config);
    		
    			if (!$this->upload->do_upload('Foto_POP2')) {
    				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
    				redirect(site_url('Ctrl_popdd/update'));
    			} else {
    					$this->Model_pop->update($this->input->post('id_pop', TRUE), $data);
    					$this->session->set_flashdata('message', 'Update Record Success');
    					redirect(site_url('Ctrl_popdd/update'));
    				}
    			
    		}if ($_FILES['File_POP']['name']) {
    		$stringasli = $this->input->post('nama_file',TRUE);
    		$stringedit =  str_replace(" ", "_", $stringasli);
    		$stringasli2 = $this->input->post('nama_file1',TRUE);
    		$stringedit2 =  str_replace(" ", "_", $stringasli2);			
    		$stringasli3 = $this->input->post('nama_file3',TRUE);
    		$stringedit3 =  str_replace(" ", "_", $stringasli3);
    		$data = array(
    			'id_pop' => $this->input->post('id_pop',TRUE),
    			'Kode_POP' => $this->input->post('Kode_POP',TRUE),
    			'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
    			'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
    			'CyberKey' => $this->input->post('CyberKey',TRUE),				
    			'Keterangan' => $this->input->post('Keterangan',TRUE),
    			'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
    			'Area_POP' => $this->input->post('Area_POP',TRUE),				
    			'File_POP' => $stringedit2,
    			'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
    			'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),
    			);
    		$this->load->library('upload');
    		$config['upload_path'] = 'public/POP/File';
    		$config['allowed_types'] = '*';
    		$config['overwrite'] = FALSE;
    		$this->upload->initialize($config);
    		
    			if (!$this->upload->do_upload('File_POP')) {
    				$this->session->set_flashdata('message', 'Type Data tidak diizinkan harus PDF');
    				redirect(site_url('Ctrl_popdd/update'));
    			} else {
    					$this->Model_pop->update($this->input->post('id_pop', TRUE), $data);
    					$this->session->set_flashdata('message', 'Update Record Success');
    					redirect(site_url('Ctrl_popdd/update'));
    				}
    			
    		}
    		else{
    			$data = array(
    				'id_pop' => $this->input->post('id_pop',TRUE),
    				'Kode_POP' => $this->input->post('Kode_POP',TRUE),
    				'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
    				'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
    				'CyberKey' => $this->input->post('CyberKey',TRUE),				
    				'Keterangan' => $this->input->post('Keterangan',TRUE),
    				'Tipe_POP' => $this->input->post('Tipe_POP',TRUE),
    				'Area_POP' => $this->input->post('Area_POP',TRUE),	
    				'Tgl_upload' => $this->input->post('Tgl_upload',TRUE),
    				'Wkt_upload' => $this->input->post('Wkt_upload',TRUE),
    				);
    			$this->Model_pop->update($this->input->post('id_pop', TRUE), $data);
    			$this->session->set_flashdata('message', 'Update Record Success');
    			redirect(site_url('Ctrl_popdd/update'));
    		}
    	}
    }

	public function delete($id_pop) 
	{
		$row = $this->Model_pop->get_by_id_pop($id_pop);

		if ($row) {
			$this->Model_pop->delete($id_pop);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('Ctrl_popd/popd_Data'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('Ctrl_popd/popd_Data'));
		}
	}

	public function _rules() 
	{
		$this->form_validation->set_rules('Kode_POP', 'Kode POP', 'trim|required');
		$this->form_validation->set_rules('Alamat_POP', 'Alamat POP', 'trim|required');
		$this->form_validation->set_rules('Koordinat_POP', 'Koordinat POP', 'trim|required');
		$this->form_validation->set_rules('CyberKey', 'CyberKey', 'trim|required');
		// $this->form_validation->set_rules('Keterangan', 'Keterangan', 'trim|required');
		$this->form_validation->set_rules('Area_POP', 'Area POP', 'trim|required');
		$this->form_validation->set_rules('Tipe_POP', 'Tipe POP', 'trim|required');
		$this->form_validation->set_rules('Tgl_upload', 'Tanggal Upload', 'trim|required');
		$this->form_validation->set_rules('Wkt_upload', 'Tanggal Upload', 'trim|required');


		$this->form_validation->set_rules('id_pop', 'id_pop', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
public function _rules2() 
	{
		$this->form_validation->set_rules('kode_room', 'kode room', 'trim|required');
		$this->form_validation->set_rules('nama_room', 'nama room', 'trim|required');
		$this->form_validation->set_rules('kode_pop', 'kode pop', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}

public function _rules3() 
	{
		$this->form_validation->set_rules('kode_perangkat', 'kode perangkat', 'trim|required');
		$this->form_validation->set_rules('nama_perangkat', 'nama perangkat', 'trim|required');
		$this->form_validation->set_rules('kode_pop', 'kode pop', 'trim|required');
		$this->form_validation->set_rules('Merk', 'Merk ', 'trim|required');
		$this->form_validation->set_rules('Tipe', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('Capasitas', 'Capasitas', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
	public function createRoom($id_pop) 
	{
		$row = $this->Model_pop->get_by_id_pop($id_pop);
		if ($row) {
			$data = array(
				'button' => 'Create',
				'action' => site_url('Ctrl_popd/create_action_room'.$id_pop),
				'kode_room' => set_value('kode_room'),
				'nama_room' => set_value('nama_room'),
				'Foto_Room' => set_value('Foto_Room'),
				'Foto_Room2' => set_value('Foto_Room2'),
				'File_Room' => set_value('File_Room'),
				'tgl_upload_room' => set_value('tgl_upload_room'),
				'wkt_upload_room' => set_value('wkt_upload_room'),		
				'kode_pop' => set_value('kode_pop',$row->Kode_POP),
				);

		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/insert_room', $data);
		}else 	
		if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/insert_room', $data);
		}else{
			$this->load->view('user/D/insert_room', $data);
			}
		}
	}

	public function create_action_room($id_pop) 
	{
		$this->_rules2();

		if ($this->form_validation->run() == FALSE) {
			$this->createRoom();
		} else {
			$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
			$kode= $this->input->post('kode_room',TRUE);
			$data = array(
				'kode_room' => $this->input->post('kode_room',TRUE),
				'nama_room' => $this->input->post('nama_room',TRUE),
				'kode_pop' => $this->input->post('kode_pop',TRUE),				
				'Foto_Room' => $stringedit,
				'Foto_Room2' => $stringedit3,
				'File_Room' => $stringedit2,
				'tgl_upload_room' => $this->input->post('tgl_upload_room',TRUE),
				'wkt_upload_room' => $this->input->post('wkt_upload_room',TRUE),	
				);			
			// $data['data']=$data;
			$this->load->library('upload');
			$config['upload_path'] = 'public/Room/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_Room') || !$this->upload->do_upload('Foto_Room2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/read/'.$id_pop));
			} else {
				unset($config);
				$config['upload_path'] = 'public/Room/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_Room')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/read/'.$id_pop));
				} else {
					$this->Model_room->insert($data);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('Ctrl_popd/read/'.$id_pop));
				}
			}
		}
	}



	public function update_room($id,$id_pop) 
	{
		$row = $this->Model_room->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('Ctrl_popd/update_room_action/'.$id_pop),
				'id' => set_value('id', $row ->id),				
				'kode_pop' => set_value('kode_pop',$row ->kode_pop),
				'kode_room' => set_value('kode_room',$row ->kode_room),
				'nama_room' => set_value('nama_room',$row->nama_room),
				'Foto_Room' => set_value('Foto_Room',$row->Foto_Room),
				'Foto_Room2' => set_value('Foto_Room2',$row->Foto_Room2),
				'File_Room' => set_value('File_Room',$row->File_Room),
				'tgl_upload_room' => set_value('tgl_upload_room',$row->tgl_upload_room),
				'wkt_upload_room' => set_value('wkt_upload_room',$row->wkt_upload_room),	
				// 'parm' => $parm,
				// 'id_pop'=> $id_pop,			
				);

			if($this->session->userdata('admin')!=''){
				$this->load->view('admin/D/update_room', $data);
			}else if($this->session->userdata('subadmin')!=''){
				$this->load->view('subadmin/D/update_room', $data);
			}else{
				$this->load->view('user/D/update_room', $data);
			}
				
			} 
	}

	public function update_room_action($id_pop)
	{
		$this->_rules2();
		if ($this->form_validation->run() == FALSE) {
			$this->update_room($this->input->post('id', TRUE));
		} else {			
			$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
			$kode= $this->input->post('kode_room',TRUE);
			$data = array(				
					'kode_pop' => $this->input->post('kode_pop',TRUE),
					'kode_room' => $this->input->post('kode_room',TRUE),
					'nama_room' => $this->input->post('nama_room',TRUE),	
					'Foto_Room' => $stringedit,
					'Foto_Room2' => $stringedit3,
					'File_Room' => $stringedit2,
					'tgl_upload_room' => $this->input->post('tgl_upload_room',TRUE),
					'wkt_upload_room' => $this->input->post('wkt_upload_room',TRUE),				
				);
			$this->load->library('upload');
			$config['upload_path'] = 'public/Room/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_Room') || !$this->upload->do_upload('Foto_Room2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/read/'.$id_pop));
			} else {
				unset($config);
				$config['upload_path'] = 'public/Room/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_Room')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/read/'.$id_pop));
				} else {
					$this->Model_room->update_room($this->input->post('id', TRUE), $data);
					$this->session->set_flashdata('message', 'Update Record Success');
					redirect(site_url('Ctrl_popd/read/'.$id_pop));
				}
			}
		}
			

			}

		 public function delete_room($id,$id_pop) 
		    {
		        $row = $this->Model_room->get_by_id($id);

		        if ($row) {
		            $this->Model_room->delete($id);
		            $this->session->set_flashdata('message', 'Delete Record Success');
		            redirect(site_url('Ctrl_popd/read/'.$id_pop));
		        } else {
		            $this->session->set_flashdata('message', 'Record Nou88t Found');
		            redirect(site_url('Ctrl_popd/read/'.$id_pop));
		        }
		    }


	public function createRak($id) 
	{
		$row = $this->Model_room->get_by_id($id);
		if ($row) {
			$pop=$row->kode_pop;
			$room=$row->kode_room;
			$data = array(
				'button' => 'Create',
				'action' => site_url('Ctrl_popd/create_action_rak/'.$id),
				// 'id_room' => set_value('id_room',$row->id_room),
				'kode_room' => set_value('kode_room',$row->kode_room),
				'nama_room' => set_value('nama_room',$row->nama_room),
				'Foto_Room' => set_value('Foto_Room',$row->Foto_Room),
				'Foto_Room2' => set_value('Foto_Room2',$row->Foto_Room2),
				'File_Room' => set_value('File_Room',$row->File_Room),
				'tgl_upload_room' => set_value('tgl_upload_room',$row->tgl_upload_room),
				'wkt_upload_room' => set_value('wkt_upload_room',$row->wkt_upload_room),				
				'id' => set_value('id',$row->id),

				// 'id_room' => set_value('id_room'),
				'kode_rak' => set_value('kode_rak'),
				'nama_rak' => set_value('nama_rak'),
				'Foto_Rak' => set_value('Foto_Rak'),
				'Foto_Rak2' => set_value('Foto_Rak2'),
				'File_Rak' => set_value('File_Rak'),
				'tgl_upload_rak' => set_value('tgl_upload_rak'),
				'wkt_upload_rak' => set_value('wkt_upload_rak'),
				'kode_pop' => set_value('kode_pop',$row->kode_pop),
				'rak' => $this->db->query("SELECT * FROM tb_rak where kode_pop='$pop' && kode_room='$room'")->result(),
				// 'parm'=> $parm,
				// 'id_pop'=> $id_pop,
				// 'id_room' => $id_room,
				);

		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/Detail_rack', $data);
		}elseif($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/Detail_rack', $data);
		}else{
			$this->load->view('user/D/Detail_rack', $data);
			}
		}
	}

	public function create_action_rak($id)
	{
		
		$kode= $this->input->post('kode_room',TRUE);
		$id= $this->input->post('id',TRUE);

			$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
		$data = array(
			'kode_room' => $this->input->post('kode_room',TRUE),
			'kode_pop' => $this->input->post('kode_pop',TRUE),
			'kode_rak' => $this->input->post('kode_rak',TRUE),
			'nama_rak' => $this->input->post('nama_rak',TRUE),
			'Foto_Rak' => $stringedit,
			'Foto_Rak2' => $stringedit3,
			'File_Rak' => $stringedit2,
			'tgl_upload_rak' => $this->input->post('tgl_upload_rak',TRUE),
			'wkt_upload_rak' => $this->input->post('wkt_upload_rak',TRUE),

			);
			

		$this->load->library('upload');
			$config['upload_path'] = 'public/Rack/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_Rak') || !$this->upload->do_upload('Foto_Rak2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/createRak/'.$id));
			} else {
				unset($config);
				$config['upload_path'] = 'public/Rack/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_Rak')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/createRak/'.$id));
				} else {
					$this->Model_rack->insert($data);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('Ctrl_popd/createRak/'.$id));
				}
			}
		}

	public function update_rak($id_rak,$id) 
	{
		$row = $this->Model_rack->get_by_id($id_rak);

		if ($row) {
			$data = array(
				'button' => 'update',
				'action' => site_url('Ctrl_popd/update_rak_action/'.$id),
				'id' => set_value('id', $row ->id_rak),				
				'kode_pop' => set_value('kode_pop',$row ->kode_pop),
				'kode_room' => set_value('kode_room',$row ->kode_room),
				'nama_room' => set_value('nama_room',$row ->kode_room),
				'kode_rak' => set_value('kode_rak',$row ->kode_rak),
				'nama_rak' => set_value('nama_rak',$row->nama_rak),
				'Foto_Rak' => set_value('Foto_Rak',$row->Foto_Rak),
				'Foto_Rak2' => set_value('Foto_Rak2',$row->Foto_Rak2),
				'File_Rak' => set_value('File_Rak',$row->File_Rak),
				'tgl_upload_rak' => set_value('tgl_upload_rak',$row->tgl_upload_rak),
				'wkt_upload_rak' => set_value('wkt_upload_rak',$row->wkt_upload_rak),
				// 'parm' => $parm,
				// 'id_pop' => $id_pop,
				 // 'id_room' => set_value('id_room'),				
				);
		if($this->session->userdata('admin')!=''){
			$this->load->view('admin/D/update_rack', $data);
		}else if($this->session->userdata('subadmin')!=''){
			$this->load->view('subadmin/D/update_rack', $data);
		}else{
			$this->load->view('user/D/update_rack', $data);
			}

			
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			$this->load->view('user/update_rack', $data);
				
		}
	}

	public function update_rak_action($id) 
	{
		$this->_rules2();
		if ($this->form_validation->run() == FALSE) {
			$this->update_room($this->input->post('id', TRUE));
		} else {	
		$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);		
			$data = array(				
					'kode_pop' => $this->input->post('kode_pop',TRUE),
					'kode_room' => $this->input->post('kode_room',TRUE),
					'kode_rak' => $this->input->post('kode_rak',TRUE),	
					'nama_rak' => $this->input->post('nama_rak',TRUE),
					'Foto_Rak' => $stringedit,
					'Foto_Rak2' => $stringedit3,
					'File_Rak' => $stringedit2,
					'tgl_upload_rak' => $this->input->post('tgl_upload_rak',TRUE),
					'wkt_upload_rak' => $this->input->post('wkt_upload_rak',TRUE),
				);
					$this->load->library('upload');
					$config['upload_path'] = 'public/Rack/Foto';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['overwrite'] = FALSE;
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('Foto_Rak') || !$this->upload->do_upload('Foto_Rak2')) {
						$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
						redirect(site_url('Ctrl_popd/createRak/'.$id));	

					} else {
						unset($config);
						$config['upload_path'] = 'public/Rack/File';
						$config['allowed_types'] = '*';
						$config['overwrite'] = FALSE;
						$this->upload->initialize($config);
						if (!$this->upload->do_upload('File_Rak')) {
							$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
							redirect(site_url('Ctrl_popd/createRak/'.$id));	
						} else {
							$this->Model_rack->update_rak($this->input->post('id', TRUE), $data);
							$this->session->set_flashdata('message', 'Update Record Success');
							redirect(site_url('Ctrl_popd/createRak/'.$id));	
						}
					}
				}
			}

		public function delete_rak($id_rak,$id)
			{
				
				$row = $this->Model_rack->get_by_id($id_rak);

				if ($row) {
					$this->Model_rack->delete($id_rak);
					$this->session->set_flashdata('message', 'Delete Record Success');
					redirect(site_url('Ctrl_popd/createRak/'.$id));
				}
			}

	public function listperangkat($id) 
	{
		// $row = $this->Model_perangkat->get_by_id($id);
		$row = $this->Model_rack->get_by_id($id);
		if ($row) {
			$rak=$row->kode_rak;
			$data = array(
				'button' => 'Create', 
				'kode_pop' => set_value('kode_pop',$row->kode_pop),
				'kode_room' => set_value('kode_room',$row->kode_room),
				'id_rak' => set_value('kode_rak',$row->id_rak),
				'kode_rak' => set_value('kode_rak',$row->kode_rak),
				'nama_rak' => set_value('nama_rak',$row->nama_rak),
				'Foto_Rak' => set_value('Foto_Rak',$row->Foto_Rak),
				'Foto_Rak2' => set_value('Foto_Rak2',$row->Foto_Rak2),
				'File_Rak' => set_value('File_Rak',$row->File_Rak),
				'tgl_upload_rak' => set_value('tgl_upload_rak',$row->tgl_upload_rak),
				'wkt_upload_rak' => set_value('wkt_upload_rak',$row->wkt_upload_rak),
                'perangkat' => $this->db->query("SELECT * FROM tb_perangkat where kode_rak='$rak'")->result(),
                 'id_perangkat' => $id,
                'perangkat' => $this->db->query("SELECT * FROM tb_perangkat where kode_rak='$rak' and Tanggal_input in(SELECT MAX(Tanggal_input) as Tanggal_input from tb_perangkat GROUP BY kode_perangkat) ")->result(),
				);
				if($this->session->userdata('admin')!=''){
					$this->load->view('admin/D/list_perangkat', $data);
				}else if($this->session->userdata('subadmin')!=''){
					$this->load->view('subadmin/D/list_perangkat', $data);
				}else{
					$this->load->view('user/D/list_perangkat', $data);
					}
		}
					
	}

	public function createPerangkat($id) 
	{
		$row = $this->Model_rack->get_by_id($id);
		if ($row) {
			$rak=$row->kode_rak;
			$data = array(
				'button' => 'Create',
				'action' => site_url('Ctrl_popd/create_action_perangkat/'.$id),
				'kode_room' => set_value('kode_room',$row->kode_room),
				'kode_rak' => set_value('kode_rak',$row->kode_rak),
				'Merk' => set_value('Merk'),
				'Tipe' => set_value('Tipe'),
				'Capasitas' => set_value('Capasitas'),
				'Foto_perangkat' => set_value('Foto_perangkat'),
				'Foto_perangkat2' => set_value('Foto_perangkat2'),
				'File_perangkat' => set_value('File_perangkat'),
				'Tanggal_input' => set_value('Tanggal_input'),
				'keterangan' => set_value('keterangan'),
				'id_rak' => set_value('kode_rak',$row->kode_rak),
				// 'parm'=> $parm,
				// 'id_pop'=> $id_pop,
				// 'id_room'=>$id_room,
				);

			if($this->session->userdata('admin')!=''){
				$this->load->view('admin/D/insert_perangkat', $data);
			}else if($this->session->userdata('subadmin')!=''){
				$this->load->view('subadmin/D/insert_perangkat', $data);
			}else{
				$this->load->view('user/D/insert_perangkat', $data);
			}

			
		}
	}

	public function create_action_perangkat($id)
	{
		
		$kode= $this->input->post('kode_rak',TRUE);
		$id_perangkat= $this->input->post('id',TRUE);

		$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
		$data = array(
			'kode_rak' => $this->input->post('kode_rak',TRUE),
			'kode_room' => $this->input->post('kode_room',TRUE),
			'kode_perangkat' => $this->input->post('kode_perangkat',TRUE),
			'nama_perangkat' => $this->input->post('nama_perangkat',TRUE),
			'Merk' => $this->input->post('Merk',TRUE),
			'Tipe' => $this->input->post('Tipe',TRUE),
			'Capasitas' => $this->input->post('Capasitas',TRUE),
			'Beban_Rectifier' => $this->input->post('Beban_Rectifier',TRUE),
			'Foto_perangkat' => $stringedit,
			'Foto_perangkat2' => $stringedit3,
			'File_perangkat' => $stringedit2,
			'keterangan' => $this->input->post('keterangan',TRUE),
			'Tanggal_input' => $this->input->post('Tanggal_input',TRUE),
			);
			

		$this->load->library('upload');
			$config['upload_path'] = 'public/Perangkat/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_perangkat') || !$this->upload->do_upload('Foto_perangkat2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/listperangkat/'.$id));
			} else {
				unset($config);
				$config['upload_path'] = 'public/Perangkat/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_perangkat')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/listPerangkat/'.$id));
				} else {
					$this->Model_perangkat->insert($data);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('Ctrl_popd/listperangkat/'.$id));
				}
			}	
	}

	public function read_perangkat($id) 
	{
		$row = $this->Model_perangkat->get_by_id2($id);
		$arr = array('var1','var2','var3','var4');
		$string[]='';
		if ($row) {			
			$perangkat=$row->kode_rak;
			$data = array(
				'id_perangkat' => $row->id_perangkat,		
				'kode_rak' => $row->kode_rak,
				'kode_room' => $row->kode_room,
				'kode_perangkat' => $row->kode_perangkat,
				'nama_perangkat' => $row->nama_perangkat,
				'Merk' => $row->Merk,
				'Tipe' => $row->Tipe,
				'Capasitas' => $row->Capasitas,
				'Beban_Rectifier' => $row->Beban_Rectifier,
				'Foto_perangkat' => $row->Foto_perangkat,
				'Foto_perangkat2' => $row->Foto_perangkat2,
				'File_perangkat' => $row->File_perangkat,
				'Tanggal_input' => $row->Tanggal_input,
				'keterangan' => $row->keterangan,
				'perangkat' => $this->db->query("SELECT * FROM tb_perangkat where kode_rak='$perangkat'")->result(),
				'perangkat2' => $this->db->query("SELECT * FROM tb_perangkat where kode_perangkat='$row->kode_perangkat'")->result(),
			
				);
			
			if($this->session->userdata('admin')!=''){
				$this->load->view('admin/D/Detail_perangkat', $data);
			}else if($this->session->userdata('subadmin')!=''){
				$this->load->view('subadmin/D/Detail_perangkat', $data);
			}else{
				$this->load->view('user/D/Detail_perangkat', $data);
			}

		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			$this->listPerangkat();
		}
	}

	public function delete_perangkat($id_perangkat,$id_rak) 
	{
		
		$row = $this->Model_perangkat->get_by_id2($id_perangkat);

		if ($row) {
			$this->Model_perangkat->delete($id_perangkat);
			$this->session->set_flashdata('message', 'Delete Record Success');
			$this->listPerangkat($id_rak);
			
		}
	}

	public function update_perangkat($id_perangkat,$id_rak)
	{
		$row = $this->Model_perangkat->get_by_id2($id_perangkat);

		if ($row) {
			$data = array(
				'button' => 'update',
				'action' => site_url('Ctrl_popd/update_perangkat_action/'.$id_rak),
				'kode_room' => set_value('kode_room',$row ->kode_room),
				'kode_rak' => set_value('kode_rak',$row ->kode_rak),
				'id_perangkat' => set_value('id_perangkat', $row ->id_perangkat),				
				'kode_perangkat' => set_value('kode_perangkat',$row ->kode_perangkat),
				'nama_perangkat' => set_value('nama_perangkat',$row ->nama_perangkat),
				'Merk' => set_value('Merk',$row->Merk),
				'Tipe' => set_value('Tipe',$row->Tipe),
				'Capasitas' => set_value('Capasitas',$row->Capasitas),
				'Beban_Rectifier' => set_value('Beban_Rectifier',$row->Beban_Rectifier),
				'Foto_perangkat' => set_value('Foto_perangkat',$row->Foto_perangkat),
				'Foto_perangkat2' => set_value('Foto_perangkat2',$row->Foto_perangkat2),
				'File_perangkat' => set_value('File_perangkat',$row->File_perangkat),
				'Tanggal_input' => set_value('Tanggal_input',$row->Tanggal_input),
				'keterangan' => set_value('keterangan',$row->keterangan),
							
				);
			if($this->session->userdata('admin')!=''){
				$this->load->view('admin/D/Update_perangkat', $data);
			}else if($this->session->userdata('subadmin')!=''){
				$this->load->view('subadmin/D/Update_perangkat', $data);
			}else{
				$this->load->view('user/D/Update_perangkat', $data);
				}

		}
	}

	public function update_perangkat_action($id)
	{

		$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file1',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
		$data = array(
			'kode_rak' => $this->input->post('kode_rak',TRUE),
			'kode_room' => $this->input->post('kode_room',TRUE),
			'kode_perangkat' => $this->input->post('kode_perangkat',TRUE),
			'nama_perangkat' => $this->input->post('nama_perangkat',TRUE),
			// 'Keterangan_Perangkat' => 'Merk Perangkat,'.$this->input->post('Merk_Perangkat',TRUE).',Jumlah Perangkat,'.$this->input->post('Jumlah_Perangkat',TRUE),
			'Merk' => $this->input->post('Merk',TRUE),
			'Tipe' => $this->input->post('Tipe',TRUE),
			'Capasitas' => $this->input->post('Capasitas',TRUE),
			'Beban_Rectifier' => $this->input->post('Beban_Rectifier',TRUE),
			
			'Foto_perangkat' => $stringedit,
			'Foto_perangkat2' => $stringedit3,
			'File_perangkat' => $stringedit2,
			'keterangan' => $this->input->post('keterangan',TRUE),
			'Tanggal_input' => $this->input->post('Tanggal_input',TRUE),
			);
			

		$this->load->library('upload');
			$config['upload_path'] = 'public/Perangkat/Foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_perangkat') || !$this->upload->do_upload('Foto_perangkat2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('Ctrl_popd/listPerangkat/'.$id));
			} else {
				unset($config);
				$config['upload_path'] = 'public/Perangkat/File';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_perangkat')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('Ctrl_popd/listPerangkat/'.$id));
				} else {
					$this->Model_perangkat->Update($data);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('Ctrl_popd/listPerangkat/'.$id));
				}
			}
		}


	public function indexlogin()
	{
		$data = array(
		'action' => site_url('Ctrl_popd/login/'),
		);
		$this->load->view('login_view',$data);
	}

	public function login(){

		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $person	  = $this->input->post('person');
		// $this->load->model('Model_Login');
		if ($person == '') {
			redirect('Ctrl_popd/indexlogin', 'refresh');
		}else{
			if ($this->Model_login->ceklogin($username, $password, 'tb_admin', 'username',$person)) {
	            if ($person=='Super Admin') {
	            	$this->session->set_userdata('admin',$username);
	            	redirect('Home/index', 'refresh');
	            }
	            else if ($person=='SubAdmin') {
	            	$this->session->set_userdata('subadmin',$username);
	            	redirect('Home/index', 'refresh');
	            }
	            
	        } else {
	        	$this->session->set_flashdata('message', 'Username/Password Salah');
	        	 redirect('Ctrl_popd/indexlogin', 'refresh');
	            // $this->indexlogin('refresh');
	       		}
       	}	
	}
	
	public function logout() {
        $this->session->sess_destroy();
       redirect('Home/index', 'refresh');
    }

	public function search_key()
    {
		$this->search_Data(1 , $this->input->post('search',TRUE));
    }
}

