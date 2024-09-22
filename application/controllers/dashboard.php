<?php
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		if (!$this->session->userdata('user')) {
			redirect('login');
		}
	}

	public function index()
	{
		$role = $this->session->userdata('role_id');
		$data['sicks'] = $this->employee_model->sicks();

		if ($role == 4 || $role == 3) {
			$this->load->view('templates/admin_header');
			$this->load->view('dashboard/admin_dash', $data);
		} else {
			$this->load->view('templates/emp_header');
			$this->load->view('dashboard/emp_dash', $data);
		}

		// Load the footer once
		$this->load->view('templates/Footer');
	}
}
