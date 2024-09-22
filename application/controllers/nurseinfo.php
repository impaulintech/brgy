<?php
class nurseinfo extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('nurseinfo_model');
        
    }
    
    public function index()
    {
        // $data['checkup_record'] = $this->checkup_record_model->rows();
        // $this->load->view('checkup_record/index', $data);
        $role = $this->session->userdata('role_id');
        if($role == 4 || $role == 3)
        {
        $data['nurseinfo'] = $this->nurseinfo_model->rows();
        $this->load->view('templates/admin_header');
        $this->load->view('nurseinfo/index',$data);
        $this->load->view('templates/Footer');
        }
        elseif($role == 2)
        {
        $data['nurseinfo'] = $this->nurseinfo_model->rows();
        $this->load->view('templates/hr_header');
        $this->load->view('employee/index',$data);
        $this->load->view('nurseinfo/Footer');
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
        $this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
        $this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
        $this->form_validation->set_rules('ContactNum', 'ContactNum',  'trim|required');
        $this->form_validation->set_rules('Dateofbirth', 'Dateofbirth',  'trim|required');
        $this->form_validation->set_rules('Email', 'Email',  'trim|required');
        $this->form_validation->set_rules('Address', 'Address',  'trim|required');

            if($this->form_validation->run())
            {
                $data = array(
                    
                    'FirstName'     => $this->input->post('FirstName'),
                    'MiddleName'     => $this->input->post('MiddleName'),
                    'LastName'      => $this->input->post('LastName'),
                    'ContactNum'     => $this->input->post('ContactNum'),
                    'Dateofbirth'     => $this->input->post('Dateofbirth'),
                    'Email'     => $this->input->post('Email'),
                    'Address'      => $this->input->post('Address')
                   
                    
                    
                );

                $result = $this->nurseinfo_model->add($data);
                if($result)
                {	
					$this->session->set_flashdata('msg', 'New user has been created');
					redirect('nurseinfo');
				}		
				else
                {
					$this->session->set_flashdata('msg', 'New user creation failed');
					redirect('nurseinfo/add');
				}
            }
            $this->load->view('nurseinfo/add');
    }

    public function show($id)
    {
        $data['nurseinfo'] = $this->nurseinfo_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('nurseinfo/edit', $data);
        
    }
    
    public function edit()
    {
        
        
        $this->form_validation->set_rules('FirstName', 'FirstName',  'trim|required');
        $this->form_validation->set_rules('MiddleName', 'MiddleName',  'trim|required');
        $this->form_validation->set_rules('LastName', 'LastName',  'trim|required');
        $this->form_validation->set_rules('ContactNum', 'ContactNum',  'trim|required');
        $this->form_validation->set_rules('Dateofbirth', 'Dateofbirth',  'trim|required');
        $this->form_validation->set_rules('Email', 'Email',  'trim|required');
        $this->form_validation->set_rules('Address', 'Address',  'trim|required');

        if($this->form_validation->run())
        {
            $id = $this->input->post('id');

            $data = array
            ( 
                'FirstName'     => $this->input->post('FirstName'),
                    'MiddleName'     => $this->input->post('MiddleName'),
                    'LastName'      => $this->input->post('LastName'),
                    'ContactNum'     => $this->input->post('ContactNum'),
                    'Dateofbirth'     => $this->input->post('Dateofbirth'),
                    'Email'     => $this->input->post('Email'),
                    'Address'      => $this->input->post('Address')
            );

            $result = $this->nurseinfo_model->edit($id, $data);
            if($result)
            {	
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('nurseinfo');
			}		
			else
            {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('nurseinfo/show/' . $id);
			}
        }
    }

    public function delete($id)
    {
        $data = array
        (
			'id'		 => $id,
            'is_deleted' => 1
        );

        $result = $this->nurseinfo_model->edit($id, $data);
        if($result)
        {	
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('nurseinfo');
		}		
		else
        {
            $this->session->set_flashdata('msg', 'Selected User has been failed updated');
            redirect('nurseinfo/delete/' . $id);
        }
           
    }

    public function view($id)
    {

        $role = $this->session->userdata('role_id');
        if($role == 4 || $role == 3)
        {
        // $data['doctorinfo'] = $this->doctorinfo_model->rows();
        $this->load->view('templates/admin_header');
        // $this->load->view('templates/Footer');
        }
        elseif($role == 2)
        {
        // $data['doctorinfo'] = $this->doctorinfo_model->rows();
        // $this->load->view('templates/hr_header');
        // $this->load->view('employee/index',$data);
        // $this->load->view('doctorinfo/Footer');
        } 

        $data['nurseinfo'] = $this->nurseinfo_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('nurseinfo/view', $data);

        
        
    }

}