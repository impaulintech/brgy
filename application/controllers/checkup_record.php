<?php
class checkup_record extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('checkup_record_model');
	}

	public function index()
	{
		// $data['checkup_record'] = $this->checkup_record_model->rows();
		// $this->load->view('checkup_record/index', $data);
		$role = $this->session->userdata('role_id');
		if ($role == 4 || $role == 3) {
			$data['checkup_record'] = $this->checkup_record_model->rows();
			$this->load->view('templates/admin_header');
			$this->load->view('checkup_record/index', $data);
			$this->load->view('templates/Footer');
		} elseif ($role == 2) {
			$data['checkup_record'] = $this->checkup_record_model->rows();
			$this->load->view('templates/hr_header');
			$this->load->view('employee/index', $data);
			$this->load->view('checkup_record/Footer');
		}
		// else
		// {
		// $this->session->sess_destroy();
		// redirect('login');
		// }
	}

	public function add()
	{

		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('Middle_Initial', 'Middle_Initial',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('Age', 'Age',  'trim|required');
		$this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');
		$this->form_validation->set_rules('Illness', 'Illness',  'trim|required');
		$this->form_validation->set_rules('Dateofcheckup', 'Dateofcheckup',  'trim|required');
		if ($this->form_validation->run()) {
			$data = array(
				'FirstName'     => $this->input->post('FirstName'),
				'Middle_Initial'     => $this->input->post('Middle_Initial'),
				'LastName'      => $this->input->post('LastName'),
				'Age'     => $this->input->post('Age'),
				'Sex'     => $this->input->post('Sex'),
				'Address'      => $this->input->post('Address'),
				'Illness'     => $this->input->post('Illness'),
				'Dateofcheckup'      => $this->input->post('Dateofcheckup')
			);

			$result = $this->checkup_record_model->add($data);
			if ($result) {
				$this->session->set_flashdata('msg', 'New user has been created');
				redirect('checkup_record');
			} else {
				$this->session->set_flashdata('msg', 'New user creation failed');
				redirect('checkup_record/add');
			}
		}
		$this->load->view('checkup_record/add');
	}

	public function show($id)
	{
		$data['checkup_record'] = $this->checkup_record_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('checkup_record/edit', $data);
	}

	public function edit()
	{


		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('Middle_Initial', 'Middle_Initial',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('Age', 'Age',  'trim|required');
		$this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');
		$this->form_validation->set_rules('Illness', 'Illness',  'trim|required');
		$this->form_validation->set_rules('Dateofcheckup', 'Dateofcheckup',  'trim|required');
		$this->form_validation->set_rules('Option', 'Option',  'trim|required');


		if ($this->form_validation->run()) {
			$id = $this->input->post('id');

			$data = array(

				'FirstName'     => $this->input->post('FirstName'),
				'Middle_Initial'     => $this->input->post('Middle_Initial'),
				'LastName'      => $this->input->post('LastName'),
				'Age'     => $this->input->post('Age'),
				'Sex'     => $this->input->post('Sex'),
				'Address'      => $this->input->post('Address'),
				'Illness'     => $this->input->post('Illness'),
				'Option'     => $this->input->post('Option'),
				'Dateofcheckup'      => $this->input->post('Dateofcheckup')
			);

			$result = $this->checkup_record_model->edit($id, $data);
			if ($result) {
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('checkup_record');
			} else {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('checkup_record/show/' . $id);
			}
		}
	}

	public function delete($id)
	{
		$data = array(
			'id'		 => $id,
			'is_deleted' => 1
		);

		$result = $this->checkup_record_model->edit($id, $data);
		if ($result) {
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('checkup_record');
		} else {
			$this->session->set_flashdata('msg', 'Selected User has been failed updated');
			redirect('checkup_record/delete/' . $id);
		}
	}

	public function view($id)
	{

		$role = $this->session->userdata('role_id');
		if ($role == 4 || $role == 3) {
			// $data['doctorinfo'] = $this->doctorinfo_model->rows();
			$this->load->view('templates/admin_header');
			// $this->load->view('templates/Footer');
		} elseif ($role == 2) {
			// $data['doctorinfo'] = $this->doctorinfo_model->rows();
			// $this->load->view('templates/hr_header');
			// $this->load->view('employee/index',$data);
			// $this->load->view('doctorinfo/Footer');
		}

		$data['checkup_record'] = $this->checkup_record_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('checkup_record/view', $data);
	}
}
