<?php
class doctorinfo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('doctorinfo_model');
	}

	public function index()
	{
		$role = $this->session->userdata('role_id');
		$data['doctorinfo'] = $this->doctorinfo_model->rows();

		if ($role == 4 || $role == 3) {
			$this->load->view('templates/admin_header');
			$this->load->view('doctorinfo/index', $data);
			$this->load->view('templates/Footer');
		} elseif ($role == 2 || $role == 1) {
			$this->load->view('templates/employee_header');
			$this->load->view('employee/index', $data);
			$this->load->view('templates/Footer');
		} else {
			$this->session->sess_destroy();
			redirect('login');
		}
	}


	public function add()
	{
		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('ContactNum', 'ContactNum',  'trim|required');
		$this->form_validation->set_rules('Email', 'Email',  'trim|required');
		$this->form_validation->set_rules('Specialization', 'Specialization',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');

		if ($this->form_validation->run()) {
			$data = array(
				'FirstName'     => $this->input->post('FirstName'),
				'MiddleName'     => $this->input->post('MiddleName'),
				'LastName'      => $this->input->post('LastName'),
				'ContactNum'     => $this->input->post('ContactNum'),
				'Email'     => $this->input->post('Email'),
				'Specialization'  => $this->input->post('Specialization'),
				'Address'      => $this->input->post('Address')
			);

			$result = $this->doctorinfo_model->add($data);
			if ($result) {
				$this->session->set_flashdata('msg', 'New user has been created');
				redirect('doctorinfo');
			} else {
				$this->session->set_flashdata('msg', 'New user creation failed');
				redirect('doctorinfo/add');
			}
		}
		$this->load->view('doctorinfo/add');
	}

	public function show($id)
	{
		$data['doctorinfo'] = $this->doctorinfo_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('doctorinfo/edit', $data);
	}

	public function edit()
	{


		$this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
		$this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
		$this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
		$this->form_validation->set_rules('ContactNum', 'ContactNum',  'trim|required');
		$this->form_validation->set_rules('Email', 'Email',  'trim|required');
		$this->form_validation->set_rules('Specialization', 'Specialization',  'trim|required');
		$this->form_validation->set_rules('Address', 'Address',  'trim|required');

		if ($this->form_validation->run()) {
			$id = $this->input->post('id');

			$data = array(
				'FirstName'     => $this->input->post('FirstName'),
				'MiddleName'     => $this->input->post('MiddleName'),
				'LastName'      => $this->input->post('LastName'),
				'ContactNum'     => $this->input->post('ContactNum'),
				'Email'     => $this->input->post('Email'),
				'Specialization'  => $this->input->post('Specialization'),
				'Address'      => $this->input->post('Address')
			);

			$result = $this->doctorinfo_model->edit($id, $data);
			if ($result) {
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('doctorinfo');
			} else {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('doctorinfo/show/' . $id);
			}
		}
	}

	public function delete($id)
	{
		$data = array(
			'id'		 => $id,
			'is_deleted' => 1
		);

		$result = $this->doctorinfo_model->edit($id, $data);
		if ($result) {
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('doctorinfo');
		} else {
			$this->session->set_flashdata('msg', 'Selected User has been failed updated');
			redirect('doctorinfo/delete/' . $id);
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

		$data['doctorinfo'] = $this->doctorinfo_model->row($id);
		// $this->load->view('template/header');
		// $this->load->view('template/nav');
		$this->load->view('doctorinfo/view', $data);
	}

	// public function view1()
	// {


	//     $this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
	//     $this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
	//     $this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
	//     $this->form_validation->set_rules('ContactNum', 'ContactNum',  'trim|required');
	//     $this->form_validation->set_rules('Email', 'Email',  'trim|required');
	//     $this->form_validation->set_rules('Specialization', 'Specialization',  'trim|required');
	//     $this->form_validation->set_rules('Address', 'Address',  'trim|required');

	//     if($this->form_validation->run())
	//     {
	//         $id = $this->input->post('id');

	//         $data = array
	//         ( 
	//             'FirstName'     => $this->input->post('FirstName'),
	//             'MiddleName'     => $this->input->post('MiddleName'),
	//             'LastName'      => $this->input->post('LastName'),
	//             'ContactNum'     => $this->input->post('ContactNum'),
	//             'Email'     => $this->input->post('Email'),
	//             'Specialization'  => $this->input->post('Specialization'),
	//             'Address'      => $this->input->post('Address')
	//         );

	//         $result = $this->doctorinfo_model->edit($id, $data);
	//         if($result)
	//         {	
	// 			$this->session->set_flashdata('msg', 'Selected User has been created');
	// 			redirect('doctorinfo');
	// 		}		
	// 		else
	//         {
	// 			$this->session->set_flashdata('msg', 'Selected User has been failed updated');
	// 			redirect('doctorinfo/show/' . $id);
	// 		}
	//     }
	// }



}
