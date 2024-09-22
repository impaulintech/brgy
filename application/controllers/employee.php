<?php
class Employee extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		if (!$this->session->userdata('user'))
			redirect('login');
	}

	public function index()
	{
		$role = $this->session->userdata('role_id');
		$data['user_name'] = 'asd';
		$data['employee'] = $this->employee_model->rows();
		
		if ($role == 4 || $role == 3) {
			$this->load->view('templates/admin_header');
			$this->load->view('employee/index', $data);
			$this->load->view('templates/Footer');
		} elseif ($role == 2) {
			$this->load->view('templates/hr_header');
			$this->load->view('employee/index', $data);
			$this->load->view('templates/Footer');
		} else {
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	public function add()
	{
		// Set form validation rules
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('contact', 'Contact', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if ($this->form_validation->run()) {
			// Prepare data for insertion
			$data = array(
				'role_id'     => $this->input->post('role_id'),
				'fname'       => $this->input->post('fname'),
				'mname'       => $this->input->post('mname'), // Optional
				'lname'       => $this->input->post('lname'),
				'address'     => $this->input->post('address'),
				'email'       => $this->input->post('email'),
				'contact'     => $this->input->post('contact'),
				'createdBy'   => $this->session->userdata('emp_id'),
				'createdAt'   => date('Y-m-d H:i:s') // Updated to 4-digit year format
			);

			// Insert into database
			$result = $this->employee_model->add($data);

			// Handle the result
			if ($result) {
				// Success message
				$this->session->set_flashdata('msg', 'New employee has been added successfully');
				redirect('employee');
			} else {
				// Failure message
				$this->session->set_flashdata('msg', 'Failed to create new employee');
				redirect('employee/add');
			}
		} else {
			// Validation failed, reload the form (make sure to load the form view here)
			$this->load->view('employee/add');
		}
	}

	public function show($emp_id)
	{
		$data['employee'] = $this->employee_model->row($emp_id);
		$this->load->view('templates/admin_header');
		$this->load->view('employee/edit', $data);
		$this->load->view('templates/Footer');
	}

	public function edit()
	{
		$this->form_validation->set_rules('role_id', 'role_id', 'trim|required');
		$this->form_validation->set_rules('lname', 'lname', 'trim|required');
		$this->form_validation->set_rules('fname', 'fname', 'trim|required');
		$this->form_validation->set_rules('mname', 'mname', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('contact', 'contact', 'trim|required');


		if ($this->form_validation->run()) {

			$emp_id = $this->input->post('emp_id');

			$data = array(
				'role_id'        =>  $this->input->post('role_id'),
				'lname'            =>  $this->input->post('lname'),
				'fname'            =>  $this->input->post('fname'),
				'mname'          =>  $this->input->post('mname'),
				'address'           =>  $this->input->post('address'),
				'email'           =>  $this->input->post('email'),
				'contact'            =>  $this->input->post('contact'),
				'updatedBy'      => $this->session->userdata('emp_id'),
				'updatedAt'      => date('y-m-d h:i:s')
			);

			$result = $this->employee_model->edit($emp_id, $data);
			if ($result) {
				$this->session->set_flashdata('msg', 'Selected user has been updated');
				redirect('employee');
			} else {
				$this->session->set_flashdata('msg', 'Selected user has been failed updated ');
				redirect('Employee/show/' . $emp_id);
			}
		}
	}

	public function delete($emp_id)
	{
		$data = array(
			'emp_id'         => $emp_id,
			'is_deleted'     => 1,
			'deletedBy'      => $this->session->userdata('emp_id'),
			'deletedAt'      => date('y-m-d h:i:s')
		);

		$result = $this->employee_model->delete($emp_id, $data);
		if ($result) {
			$this->session->set_flashdata('msg', 'Selected user has been updated');
			redirect('employee');
		} else {
			$this->session->set_flashdata('msg', 'Selected user has been failed updated ');
			redirect('Employee/show/' . $emp_id);
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

		$data['employee'] = $this->employee_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('employee/view', $data);
	}
}
