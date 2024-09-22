<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
		$this->load->view('login/index');
	}
	public function login()
	{
		// Validate input fields
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run()) {
			// Get input data
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

			// Verify login credentials
			$result = $this->login_model->login($data);

			if ($result) {
				// Set session data for logged-in user
				$session_data = array(
					'user' => 'msg',  // Adjust this key if necessary
					'emp_id' => $result['emp_id'],
					'fname' => $result['fname'],
					'mname' => $result['mname'],
					'lname' => $result['lname'],
					'address' => $result['address'],
					'contact' => $result['contact'],
					'email' => $result['email'],
					'user_id' => $result['user_id'],
					'role_id' => $result['role_id']
				);
				$this->session->set_userdata($session_data);

				// Redirect based on role
				if ($result['role_id'] == 1 || $result['role_id'] == 2) {
					redirect('dashboard');
				} else {
					redirect('doctorinfo');
				}
			} else {
				// Login failed
				$this->session->set_flashdata('user', 'Login Failed');
				redirect('login');
			}
		} else {
			// If form validation fails
			$this->load->view('login_view'); // Adjust this to your login view
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
