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
		$user_id = $this->session->userdata('user_id');
		$data['user_name'] = $this->session->userdata('fname') . ' ' . $this->session->userdata('lname');
		$data['email'] = $this->session->userdata('email');
		$data['address'] = $this->session->userdata('address');
		$data['contact'] = $this->session->userdata('contact');


		if ($role == 4 || $role == 3) {
			$data['schedules'] = $this->employee_model->get_schedules()['schedules'];
			$data['totalAppointmentsToday'] = $this->employee_model->get_schedules()['totalAppointmentsToday'];
			$data['totalAppointmentsThisWeek'] = $this->employee_model->get_schedules()['totalAppointmentsThisWeek'];
			$data['completedAppointments'] = $this->employee_model->get_schedules()['completedAppointments'];
			$data['canceledAppointments'] = $this->employee_model->get_schedules()['canceledAppointments'];

			$this->load->view('templates/admin_header');
			$this->load->view('dashboard/admin_dash', $data);
		} else {

			$data['schedules'] = $this->employee_model->get_schedule($user_id)['schedules'];
			$data['totalAppointmentsToday'] = $this->employee_model->get_schedule($user_id)['totalAppointmentsToday'];
			$data['totalAppointmentsThisWeek'] = $this->employee_model->get_schedule($user_id)['totalAppointmentsThisWeek'];
			$data['completedAppointments'] = $this->employee_model->get_schedule($user_id)['completedAppointments'];
			$data['canceledAppointments'] = $this->employee_model->get_schedule($user_id)['canceledAppointments'];

			$this->load->view('templates/emp_header');
			$this->load->view('dashboard/emp_dash', $data);
		}

		// Load the footer once
		$this->load->view('templates/Footer');
	}
}
