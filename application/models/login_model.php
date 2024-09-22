<?php
class login_model extends CI_Model
{
	public function login()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('employee', 'employee.emp_id = user.emp_id', 'right');

		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$this->db->where('user.is_deleted = 0');
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->row_array();
		} else {
			return false;
		}
	}
}
