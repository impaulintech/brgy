<?php
class checkup_report extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('checkup_report_model');
        
    }
    
    public function index()
    {
        // $data['checkup_record'] = $this->checkup_record_model->rows();
        // $this->load->view('checkup_record/index', $data);
        $role = $this->session->userdata('role_id');
        if($role == 4 || $role == 3)
        {
        $data['checkup_report'] = $this->checkup_report_model->rows();
        $this->load->view('templates/admin_header');
        $this->load->view('checkup_report/index',$data);
        $this->load->view('templates/Footer');
        }
        elseif($role == 2)
        {
        $data['checkup_record'] = $this->checkup_report_model->rows();
        $this->load->view('templates/hr_header');
        $this->load->view('employee/index',$data);
        $this->load->view('checkup_report/Footer');
        } 
        // else
        // {
        // $this->session->sess_destroy();
        // redirect('login');
        // }
    }

    public function add()
    {
        
        $this->form_validation->set_rules('FullName', 'FullName',  'trim|required');
        $this->form_validation->set_rules('Date', 'Date',  'trim|required');
        $this->form_validation->set_rules('Symptoms', 'Symptoms',  'trim|required');
        $this->form_validation->set_rules('Age', 'Age',  'trim|required');
        $this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
        $this->form_validation->set_rules('Diagnosis', 'Diagnosis',  'trim|required');
        $this->form_validation->set_rules('MedicationsPrescribed', 'MedicationsPrescribed',  'trim|required');
        $this->form_validation->set_rules('AdditionalNotes', 'AdditionalNotes',  'trim|required');
            if($this->form_validation->run())
            {
                $data = array(
                    
                    'FullName'     => $this->input->post('FullName'),
                    'Date'     => $this->input->post('Date'),
                    'Symptoms'      => $this->input->post('Symptoms'),
                    'Age'     => $this->input->post('Age'),
                    'Sex'     => $this->input->post('Sex'),
                    'Diagnosis'     => $this->input->post('Diagnosis'),
                    'MedicationsPrescribed'     => $this->input->post('MedicationsPrescribed'),
                    'AdditionalNotes'      => $this->input->post('AdditionalNotes')
                    
                    
                );

                $result = $this->checkup_report_model->add($data);
                if($result)
                {	
					$this->session->set_flashdata('msg', 'New user has been created');
					redirect('checkup_report');
				}		
				else
                {
					$this->session->set_flashdata('msg', 'New user creation failed');
					redirect('checkup_report/add');
				}
            }
            $this->load->view('checkup_report/add');
    }

    public function show($id)
    {
        $data['checkup_report'] = $this->checkup_report_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('checkup_report/edit', $data);
        
    }
    
    public function edit()
    {
        
        
        $this->form_validation->set_rules('FullName', 'FullName',  'trim|required');
        $this->form_validation->set_rules('Date', 'Date',  'trim|required');
        $this->form_validation->set_rules('Symptoms', 'Symptoms',  'trim|required');
        $this->form_validation->set_rules('Age', 'Age',  'trim|required');
        $this->form_validation->set_rules('Sex', 'Sex',  'trim|required');
        $this->form_validation->set_rules('Diagnosis', 'Diagnosis',  'trim|required');
        $this->form_validation->set_rules('MedicationsPrescribed', 'MedicationsPrescribed',  'trim|required');
        $this->form_validation->set_rules('AdditionalNotes', 'AdditionalNotes',  'trim|required');


        if($this->form_validation->run())
        {
            $id = $this->input->post('id');

            $data = array
            ( 
                
                'FullName'     => $this->input->post('FullName'),
                'Date'     => $this->input->post('Date'),
                'Symptoms'      => $this->input->post('Symptoms'),
                'Age'     => $this->input->post('Age'),
                'Sex'     => $this->input->post('Sex'),
                'Diagnosis'     => $this->input->post('Diagnosis'),
                'MedicationsPrescribed'     => $this->input->post('MedicationsPrescribed'),
                'AdditionalNotes'      => $this->input->post('AdditionalNotes')
            );

            $result = $this->checkup_report_model->edit($id, $data);
            if($result)
            {	
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('checkup_report');
			}		
			else
            {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('checkup_report/show/' . $id);
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

        $result = $this->checkup_report_model->edit($id, $data);
        if($result)
        {	
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('checkup_report');
		}		
		else
        {
            $this->session->set_flashdata('msg', 'Selected User has been failed updated');
            redirect('checkup_report/delete/' . $id);
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

        $data['checkup_report'] = $this->checkup_report_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('checkup_report/view', $data);

        
        
    }

}