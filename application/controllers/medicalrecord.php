<?php
class medicalrecord extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('medicalrecord_model');
	}

	public function index()
	{
		$role = $this->session->userdata('role_id');
		if ($role == 4 || $role == 3) {
			$data['medicalrecord'] = $this->medicalrecord_model->rows();
			$this->load->view('templates/admin_header');
			$this->load->view('medicalrecord/index', $data);
			$this->load->view('templates/Footer');
		} elseif ($role == 2) {
			$data['medicalrecord'] = $this->medicalrecord_model->rows();
			$this->load->view('templates/hr_header');
			$this->load->view('medicalrecord/index', $data);
			$this->load->view('medicalrecord/Footer');
		}
		// else
		// {
		// $this->session->sess_destroy();
		// redirect('medicalrecord');
		// }

	}

	public function add()
	{
		$this->form_validation->set_rules('FullName',     'FullName',     'trim|required');
		$this->form_validation->set_rules('Address',      'Address',      'trim|required');
		$this->form_validation->set_rules('Religion',     'Religion',     'trim|required');
		$this->form_validation->set_rules('Birthdate',    'Birthdate',    'trim|required');
		$this->form_validation->set_rules('Age',          'Age',          'trim|required');
		$this->form_validation->set_rules('Sex',          'Sex',          'trim');
		$this->form_validation->set_rules('No_number',    'No_number',    'trim|required');
		$this->form_validation->set_rules('Illness',      'Illness',      'trim|required');
		$this->form_validation->set_rules('Description',  'Description',  'trim|required');

		if ($this->form_validation->run()) {
			$data = array(
				'FullName'         =>   $this->input->post('FullName'),
				'Address'          => 	$this->input->post('Address'),
				'Religion'         => 	$this->input->post('Religion'),
				'Birthdate'        => 	$this->input->post('Birthdate'),
				'Age'              => 	$this->input->post('Age'),
				'Sex'              => 	$this->input->post('Sex'),
				'No_number'        => 	$this->input->post('No_number'),
				'Illness'          => 	$this->input->post('Illness'),
				'Description'      => 	$this->input->post('Description')
			);

			$result = $this->medicalrecord_model->add($data);
			if ($result) {
				$this->session->set_flashdata('msg', 'New Patientinfo has been created');
				redirect('medicalrecord');
			} else {
				$this->session->set_flashdata('msg', 'New Patientinfo creation failed');
				redirect('medicalrecord/add');
			}
		}
		$this->load->view('medicalrecord/add');
	}

	public function show($id)
	{
		$data['medicalrecord'] = $this->medicalrecord_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('medicalrecord/edit', $data);
	}

	public function edit()
	{

		$this->form_validation->set_rules('Fullname',     'FullName',     'trim|required');
		$this->form_validation->set_rules('Address',      'Address',      'trim|required');
		$this->form_validation->set_rules('Religion',     'Religion',     'trim|required');
		$this->form_validation->set_rules('Birthdate',    'Birthdate',    'trim|required');
		$this->form_validation->set_rules('Age',          'Age',          'trim|required');
		$this->form_validation->set_rules('Sex',          'Sex',          'trim|required');
		$this->form_validation->set_rules('No_number',    'No_number',    'trim|required');
		$this->form_validation->set_rules('Illness',      'Illness',      'trim|required');
		$this->form_validation->set_rules('Description',  'Description',  'trim|required');

		if ($this->form_validation->run()) {
			$id = $this->input->post('id');

			$data = array(
				'id'         =>   $this->input->post('id'),
				'Fullname'         =>   $this->input->post('Fullname'),
				'Address'          => 	$this->input->post('Address'),
				'Religion'         => 	$this->input->post('Religion'),
				'Birthdate'        => 	$this->input->post('Birthdate'),
				'Age'              => 	$this->input->post('Age'),
				'Sex'              => 	$this->input->post('Sex'),
				'No_number'        => 	$this->input->post('No_number'),
				'Illness'          => 	$this->input->post('Illness'),
				'Description'      => 	$this->input->post('Description')
			);

			$result = $this->medicalrecord_model->edit($id, $data);
			if ($result) {
				$this->session->set_flashdata('msg', 'Patientinfo User has been created');
				redirect('medicalrecord');
			} else {
				$this->session->set_flashdata('msg', 'Patientinfo User has been failed updated');
				redirect('medicalrecord/show/' . $id);
			}
		}
	}

	public function delete($id)
	{
		$data = array(
			'id'		 => $id,
			'is_deleted' => 1
		);

		$result = $this->medicalrecord_model->edit($id, $data);
		if ($result) {
			$this->session->set_flashdata('msg', 'Selected Patientinfo has been created');
			redirect('medicalrecord');
		} else {
			$this->session->set_flashdata('msg', 'Selected Patientinfo has been failed updated');
			redirect('medicalrecord/delete/' . $id);
		}
	}
}
