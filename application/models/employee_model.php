<?php
class Employee_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->table = 'employee';
	}

	public function rows()
	{
		$where = array(
			'is_deleted' => 0
		);
		$query = $this->db->get_where($this->table, $where);
		return $query->result();
	}
	public function row($emp_id)
	{
		$where = array(
			'is_deleted' => 0,
			'emp_id'         => $emp_id
		);
		$query = $this->db->get_where($this->table, $where);
		return $query->row();
	}

	public function sicks()
	{
		$this->db->select('*');
		$this->db->from('health');
		$this->db->join('employee', 'employee.emp_id = health.emp_id');
		$this->db->join('illness', 'illness.ill_id = health.ill_id');
		$this->db->where('health.is_sick = 1');
		$query = $this->db->get();
		return $query->result();
	}

	public function logs()
	{
		$where = array();
		$query = $this->db->get_where($this->table, $where);
		return $query->result();
	}

	public function add($data)
	{
		$this->db->insert($this->table, $data);
		return true;
	}
	public function edit($emp_id, $data)
	{
		$where = array(
			'is_deleted' => 0,
			'emp_id'         => $emp_id
		);
		return $this->db->update($this->table, $data, $where);
	}

	public function delete($emp_id, $data)
	{
		$where = array(
			'is_deleted' => 0,
			'emp_id'         => $emp_id
		);
		return $this->db->update($this->table, $data, $where);
	}

	// fetch all schedules
	public function get_schedules()
	{
		$this->db->select('*');
		$this->db->from('schedule');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_schedule($user_id)
	{
		// Select the schedule data along with illness name
		$this->db->select('schedule.*, illness.ill_name');
		$this->db->from('schedule');
		$this->db->join('user', 'user.user_id = schedule.user_id');
		$this->db->join('illness', 'illness.ill_id = schedule.ill_id', 'left');
		$this->db->where('schedule.user_id', $user_id);

		$query = $this->db->get();
		$schedules = $query->result();

		// Calculate additional data
		$today = date('Y-m-d');
		$weekStart = date('Y-m-d', strtotime('monday this week'));
		$weekEnd = date('Y-m-d', strtotime('sunday this week'));

		// Total appointments today
		$this->db->where('schedule.user_id', $user_id);
		$this->db->where('DATE(schedule.AppointmentDate)', $today);
		$totalAppointmentsToday = $this->db->count_all_results('schedule');

		// Total appointments this week
		$this->db->where('schedule.user_id', $user_id);
		$this->db->where('DATE(schedule.AppointmentDate) >=', $weekStart);
		$this->db->where('DATE(schedule.AppointmentDate) <=', $weekEnd);
		$totalAppointmentsThisWeek = $this->db->count_all_results('schedule');

		// Completed appointments
		$this->db->where('schedule.user_id', $user_id);
		$this->db->where('schedule.Status', 1);
		$completedAppointments = $this->db->count_all_results('schedule');

		// Canceled appointments
		$this->db->where('schedule.user_id', $user_id);
		$this->db->where('schedule.Status', 0);
		$canceledAppointments = $this->db->count_all_results('schedule');

		return [
			'schedules' => $schedules,
			'totalAppointmentsToday' => $totalAppointmentsToday,
			'totalAppointmentsThisWeek' => $totalAppointmentsThisWeek,
			'completedAppointments' => $completedAppointments,
			'canceledAppointments' => $canceledAppointments,
		];
	}

	public function api_get_schedule()
	{
		$user_id = $this->session->userdata('user_id');
		if (!$user_id) {
			$response = [
				'status' => 'error',
				'message' => 'User not authenticated'
			];
			echo json_encode($response);
			return;
		}

		$schedules = $this->get_schedule($user_id);
		if ($schedules) {
			$response = [
				'status' => 'success',
				'data' => $schedules['schedules']
			];
		} else {
			$response = [
				'status' => 'error',
				'message' => 'No schedules found'
			];
		}

		echo json_encode($response);
	}

	public function api_get_schedules()
	{
		$user_id = $this->session->userdata('user_id');
		if (!$user_id) {
			$response = [
				'status' => 'error',
				'message' => 'User not authenticated'
			];
			echo json_encode($response);
			return;
		}

		$schedules = $this->get_schedules();
		if ($schedules) {
			$response = [
				'status' => 'success',
				'data' => $schedules['schedules']
			];
		} else {
			$response = [
				'status' => 'error',
				'message' => 'No schedules found'
			];
		}

		echo json_encode($response);
	}
}
