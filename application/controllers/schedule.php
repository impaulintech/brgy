<?php
class schedule extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('schedule_model');
	}

	public function index()
	{
		$role = $this->session->userdata('role_id');
		$data['schedule'] = $this->schedule_model->rows();
		if ($role == 4 || $role == 3) {
			$this->load->view('templates/admin_header');
			$this->load->view('schedule/index', $data);
			$this->load->view('templates/Footer');
		} elseif ($role == 2 || $role == 1) {
			$this->load->view('templates/hr_header');
			$this->load->view('schedule/index', $data);
			// $this->load->view('schedule/Footer');
		}
	}

	public function add()
	{
		$role = $this->session->userdata('role_id');
		$user_id = $this->session->userdata('user_id');
		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');
		$this->form_validation->set_rules('Birthdate', 'Birthdate',  'trim|required');
		$this->form_validation->set_rules('Age', 'Age',  'trim|required');
		$this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
		$this->form_validation->set_rules('Status', 'Status',  'trim|required');
		$this->form_validation->set_rules('Contact_Num', 'Contact_Num',  'trim|required');
		$this->form_validation->set_rules('AppointmentDate', 'AppointmentDate',  'trim|required');
		$this->form_validation->set_rules('Description', 'Description',  'trim');
		$this->form_validation->set_rules('ill_id', 'ill_id',  'trim');

		if ($this->form_validation->run()) {
			$data = array(
				'FirstName'     => $this->input->post('FirstName'),
				'user_id'     => $user_id,
				'MiddleName'     => $this->input->post('MiddleName'),
				'LastName'      => $this->input->post('LastName'),
				'Address'     => $this->input->post('Address'),
				'Birthdate'     => $this->input->post('Birthdate'),
				'Age'  => $this->input->post('Age'),
				'Sex'      => $this->input->post('Sex'),
				'Status'     => $this->input->post('Status'),
				'Contact_Num'      => $this->input->post('Contact_Num'),
				'AppointmentDate'     => $this->input->post('AppointmentDate'),
				'Description'     => $this->input->post('Description'),
				'ill_id'     => $this->input->post('ill_id')
			);

			$result = $this->schedule_model->add($data);
			if ($result) {
				$this->session->set_flashdata('msg', 'New user has been created');
				if ($role == 4 || $role == 3) {
					redirect('schedule');
				} elseif ($role == 2 || $role == 1) {
					redirect('dashboard');
				}
			} else {
				$this->session->set_flashdata('msg', 'New user creation failed');
				redirect('schedule/add');
			}
		}
		$this->load->view('schedule/add');
	}

	public function show($id)
	{
		$data['schedule'] = $this->schedule_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('schedule/edit', $data);
	}

	public function edit()
	{


		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');
		$this->form_validation->set_rules('Birthdate', 'Birthdate',  'trim|required');
		$this->form_validation->set_rules('Age', 'Age',  'trim|required');
		$this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
		$this->form_validation->set_rules('Status', 'Status',  'trim|required');
		$this->form_validation->set_rules('Contact_Num', 'Contact_Num',  'trim|required');
		$this->form_validation->set_rules('AppointmentDate', 'AppointmentDate',  'trim|required');
		$this->form_validation->set_rules('Description', 'Description',  'trim|required');

		if ($this->form_validation->run()) {
			$id = $this->input->post('id');

			$data = array(
				'FirstName'     => $this->input->post('FirstName'),
				'MiddleName'     => $this->input->post('MiddleName'),
				'LastName'      => $this->input->post('LastName'),
				'Address'     => $this->input->post('Address'),
				'Birthdate'     => $this->input->post('Birthdate'),
				'Age'  => $this->input->post('Age'),
				'Sex'      => $this->input->post('Sex'),
				'Status'     => $this->input->post('Status'),
				'Contact_Num'      => $this->input->post('Contact_Num'),
				'AppointmentDate'     => $this->input->post('AppointmentDate'),
				'Description'     => $this->input->post('Description')
			);

			$result = $this->schedule_model->edit($id, $data);
			if ($result) {
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('schedule');
			} else {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('schedule/show/' . $id);
			}
		}
	}

	public function delete($id)
	{
		$data = array(
			'id'		 => $id,
			'is_deleted' => 1
		);

		$result = $this->schedule_model->edit($id, $data);
		if ($result) {
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('schedule');
		} else {
			$this->session->set_flashdata('msg', 'Selected User has been failed updated');
			redirect('schedule/delete/' . $id);
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

		$data['schedule'] = $this->schedule_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('schedule/view', $data);
	}
}
