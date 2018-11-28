<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pop extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pop_model');
		$this->load->model('Room_model');
		$this->load->model('Rak_model');
		$this->load->model('Perangkat_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$q = urldecode($this->input->get('q', TRUE));
		$start = intval($this->input->get('start'));

		if ($q <> '') {
			$config['base_url'] = base_url() . 'pop/?q=' . urlencode($q);
			$config['first_url'] = base_url() . 'pop/?q=' . urlencode($q);
		} else {
			$config['base_url'] = base_url() . 'pop';
			$config['first_url'] = base_url() . 'pop';
		}

		$config['per_page'] = 10;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = $this->Pop_model->total_rows($q);
		$pop = $this->Pop_model->get_limit_data($config['per_page'], $start, $q);

		$this->load->library('pagination');
		$this->pagination->initialize($config);

		$data = array(
			'pop_data' => $pop,
			'q' => $q,
			'pagination' => $this->pagination->create_links(),
			'total_rows' => $config['total_rows'],
			'start' => $start,
			);
		$this->load->view('pop/tb_popsb_list', $data);
	}

	public function read($id) 
	{
		$row = $this->Pop_model->get_by_id($id);
		if ($row) {
			$room=$row->Kode_POP;
			$data = array(
				'id_pop' => $row->id_pop,
				'Kode_POP' => $row->Kode_POP,
				'Alamat_POP' => $row->Alamat_POP,
				'Koordinat_POP' => $row->Koordinat_POP,
				'CyberKey' => $row->CyberKey,
				'Foto_POP' => $row->Foto_POP,
				'Foto_POP2' => $row->Foto_POP2,
				'Keterangan' => $row->Keterangan,
				'File_POP' => $row->File_POP,
				'room' => $this->db->query("SELECT * FROM tb_room where kode_pop='$room'")->result(),
				);
			$this->load->view('pop/tb_popsb_read', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('pop'));
		}
	}

	public function create() 
	{
		$data = array(
			'button' => 'Create',
			'action' => site_url('pop/create_action'),
			'id_pop' => set_value('id_pop'),
			'Kode_POP' => set_value('Kode_POP'),
			'Alamat_POP' => set_value('Alamat_POP'),
			'Koordinat_POP' => set_value('Koordinat_POP'),
			'CyberKey' => set_value('CyberKey'),
			'Foto_POP' => set_value('Foto_POP'),
			'Foto_POP2' => set_value('Foto_POP2'),
			'Keterangan' => set_value('Keterangan'),
			'File_pop' => set_value('File_pop'),
			);
		$this->load->view('pop/tb_popsb_form', $data);
	}

	public function create_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->create();
		} else {
			$stringasli = $this->input->post('nama_file',TRUE);
			$stringedit =  str_replace(" ", "_", $stringasli);
			$stringasli2 = $this->input->post('nama_file2',TRUE);
			$stringedit2 =  str_replace(" ", "_", $stringasli2);			
			$stringasli3 = $this->input->post('nama_file3',TRUE);
			$stringedit3 =  str_replace(" ", "_", $stringasli3);
			$input = array(
				'Kode_POP' => $this->input->post('Kode_POP',TRUE),
				'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
				'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
				'CyberKey' => $this->input->post('CyberKey',TRUE),
				'Foto_POP' => $stringedit,
				'Foto_POP2' => $stringedit2,
				'Keterangan' => $this->input->post('Keterangan',TRUE),
				'File_pop' => $stringedit3,
				);

			$data['input']=$input;
			$this->load->library('upload');
			$config['upload_path'] = 'public/pop/foto';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['overwrite'] = FALSE;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('Foto_POP') || !$this->upload->do_upload('Foto_POP2')) {
				$this->session->set_flashdata('message', 'Type Data tidak diizinkann harus jpg|png');
				redirect(site_url('pop/create'));
			} else {
				unset($config);
				$config['upload_path'] = 'public/pop/file';
				$config['allowed_types'] = '*';
				$config['overwrite'] = FALSE;
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('File_pop')) {
					$this->session->set_flashdata('message', 'Type Data tidak diizinkan');
					redirect(site_url('pop/create'));
				} else {
					$this->Pop_model->insert($input);
					$this->session->set_flashdata('message', 'Data berhasil di Tambah');
					redirect(site_url('pop'));

				}
			}
		}
	}

	public function update($id) 
	{
		$row = $this->Pop_model->get_by_id($id);

		if ($row) {
			$data = array(
				'button' => 'Update',
				'action' => site_url('pop/update_action'),
				'id_pop' => set_value('id_pop', $row->id_pop),
				'Kode_POP' => set_value('Kode_POP', $row->Kode_POP),
				'Alamat_POP' => set_value('Alamat_POP', $row->Alamat_POP),
				'Koordinat_POP' => set_value('Koordinat_POP', $row->Koordinat_POP),
				'CyberKey' => set_value('CyberKey', $row->CyberKey),
				'Foto_POP' => set_value('Foto_POP', $row->Foto_POP),
				'Foto_POP2' => set_value('Foto_POP2', $row->Foto_POP2),
				'Keterangan' => set_value('Keterangan', $row->Keterangan),
				'File_pop' => set_value('File_pop', $row->File_pop),
				);
			$this->load->view('pop/tb_popsb_form', $data);
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('pop'));
		}
	}

	public function update_action() 
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update($this->input->post('id_pop', TRUE));
		} else {
			$data = array(
				'Kode_POP' => $this->input->post('Kode_POP',TRUE),
				'Alamat_POP' => $this->input->post('Alamat_POP',TRUE),
				'Koordinat_POP' => $this->input->post('Koordinat_POP',TRUE),
				'CyberKey' => $this->input->post('CyberKey',TRUE),
				'Foto_POP' => $this->input->post('Foto_POP',TRUE),
				'Foto_POP2' => $this->input->post('Foto_POP2',TRUE),
				'Keterangan' => $this->input->post('Keterangan',TRUE),
				'File_pop' => $this->input->post('File_pop',TRUE),
				);

			$this->Pop_model->update($this->input->post('id_pop', TRUE), $data);
			$this->session->set_flashdata('message', 'Update Record Success');
			redirect(site_url('pop'));
		}
	}

	public function delete($id) 
	{
		$row = $this->Pop_model->get_by_id($id);

		if ($row) {
			$this->Pop_model->delete($id);
			$this->session->set_flashdata('message', 'Delete Record Success');
			redirect(site_url('pop'));
		} else {
			$this->session->set_flashdata('message', 'Record Not Found');
			redirect(site_url('pop'));
		}
	}

	public function _rules() 
	{
		$this->form_validation->set_rules('Kode_POP', 'kode pop', 'trim|required');
		$this->form_validation->set_rules('Alamat_POP', 'alamat pop', 'trim|required');
		$this->form_validation->set_rules('Koordinat_POP', 'koordinat pop', 'trim|required');
		$this->form_validation->set_rules('CyberKey', 'cyberkey', 'trim|required');
	// $this->form_validation->set_rules('Foto_POP', 'foto pop', 'trim|required');
	// $this->form_validation->set_rules('Foto_POP2', 'foto pop2', 'trim|required');
		$this->form_validation->set_rules('Keterangan', 'keterangan', 'trim|required');
	// $this->form_validation->set_rules('File_pop', 'file pop', 'trim|required');

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

	public function createRoom($id) 
	{
		$row = $this->Pop_model->get_by_id($id);
		if ($row) {
			$data = array(
				'button' => 'Create',
				'action' => site_url('pop/create_action_room'),
				'kode_room' => set_value('kode_room'),
				'nama_room' => set_value('nama_room'),
				'kode_pop' => set_value('kode_pop',$row->Kode_POP),
				);
			$this->load->view('room/form_room', $data);
		}
	}

	public function create_action_room() 
	{
		$this->_rules2();

		if ($this->form_validation->run() == FALSE) {
			$this->createRoom();
		} else {
			$kode= $this->input->post('kode_room',TRUE);
			$data = array(
				'kode_room' => $this->input->post('kode_room',TRUE),
				'nama_room' => $this->input->post('nama_room',TRUE),
				'kode_pop' => $this->input->post('kode_pop',TRUE),
				);
			$this->Room_model->insert($data);
			$this->session->set_flashdata('message', 'Data berhasil di Tambah');
			redirect(site_url('pop/read/'.$kode));

		}
	}

	public function createRak($id) 
	{
		$row = $this->Room_model->get_by_id($id);
		if ($row) {
			$pop=$row->kode_pop;
			$room=$row->kode_room;
			$data = array(
				'button' => 'Create',
				'action' => site_url('pop/create_action_rak'),
				'kode_room' => set_value('kode_room',$row->kode_room),
				'id' => set_value('id',$row->id),
				'kode_rak' => set_value('kode_rak'),
				'nama_rak' => set_value('nama_rak'),
				'kode_pop' => set_value('kode_pop',$row->kode_pop),
				'rak' => $this->db->query("SELECT * FROM tb_rak where kode_pop='$pop' && kode_room='$room'")->result(),
				);
			$this->load->view('rak/form_rak', $data);
		}
	}

	public function create_action_rak() 
	{
		
		$kode= $this->input->post('kode_room',TRUE);
		$id= $this->input->post('id',TRUE);
		$data = array(
			'kode_room' => $this->input->post('kode_room',TRUE),
			'kode_pop' => $this->input->post('kode_pop',TRUE),
			'kode_rak' => $this->input->post('kode_rak',TRUE),
			'nama_rak' => $this->input->post('nama_rak',TRUE),
			);
		$this->Rak_model->insert($data);
		$this->session->set_flashdata('message', 'Data berhasil di Tambah');
		redirect(site_url('pop/createRak/'.$id));		
	}

	public function listPerangkat($id) 
	{
		$row = $this->Rak_model->get_by_id($id);
		if ($row) {
			$rak=$row->kode_rak;
			$data = array(
				'button' => 'Create',
				'kode_room' => set_value('kode_room',$row->kode_room),
				'kode_rak' => set_value('kode_rak',$row->kode_rak),
				'id_rak' => set_value('kode_rak',$row->id_rak),
				'kode_perangkat' => set_value('kode_perangkat'),
				'nama_perangkat' => set_value('nama_perangkat'),
				'perangkat' => $this->db->query("SELECT * FROM tb_perangkat where kode_rak='$rak'")->result(),
				);
			$this->load->view('perangkat/list_perangkat', $data);
		}
	}
	
	public function createPerangkat($id) 
	{
		$row = $this->Rak_model->get_by_id($id);
		if ($row) {
			$rak=$row->kode_rak;
			$data = array(
				'button' => 'Create',
				'action' => site_url('pop/create_action_perangkat'),
				'kode_room' => set_value('kode_room',$row->kode_room),
				'kode_rak' => set_value('kode_rak',$row->kode_rak),
				'id_rak' => set_value('kode_rak',$row->id_rak),
				'kode_perangkat' => set_value('kode_perangkat'),
				'nama_perangkat' => set_value('nama_perangkat'),
				'perangkat' => $this->db->query("SELECT * FROM tb_perangkat where kode_rak='$rak'")->result(),
				);
			$this->load->view('perangkat/form_perangkat', $data);
		}
	}

	public function create_action_perangkat() 
	{
		
		$kode= $this->input->post('kode_rak',TRUE);
		$id= $this->input->post('id',TRUE);
		$data = array(
			'kode_rak' => $this->input->post('kode_rak',TRUE),
			'kode_perangkat' => $this->input->post('kode_perangkat',TRUE),
			'nama_perangkat' => $this->input->post('nama_perangkat',TRUE),
			);
		$this->Perangkat_model->insert($data);
		$this->session->set_flashdata('message', 'Data berhasil di Tambah');
		redirect(site_url('pop/listPerangkat/'.$id));		
	}

}

