<?php

class ScheduleController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
	}

	public function getUserSchedule()
	{
		$user_id = $this->session->userdata('user_id');

		if (!$user_id) {
			$response = [
				'status' => 'error',
				'message' => 'User not authenticated'
			];
			$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
			return;
		}

		$schedules = $this->employee_model->get_schedule($user_id);

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($schedules));
	}

	public function getUserSchedules()
	{

		$schedules = $this->employee_model->get_schedules();

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($schedules));
	}
}
