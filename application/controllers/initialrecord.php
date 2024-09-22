<?php
class initialrecord extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('initialrecord_model');
        
    }
    
    public function index()
    {
        // $data['checkup_record'] = $this->checkup_record_model->rows();
        // $this->load->view('checkup_record/index', $data);
        $role = $this->session->userdata('role_id');
        if($role == 4 || $role == 3)
        {
        $data['initialrecord'] = $this->initialrecord_model->rows();
        $this->load->view('templates/admin_header');
        $this->load->view('initialrecord/index',$data);
        $this->load->view('templates/Footer');
        }
        elseif($role == 2)
        {
        $data['initialrecord'] = $this->initialrecord_model->rows();
        $this->load->view('templates/hr_header');
        $this->load->view('initialrecord/index',$data);
        $this->load->view('doctorinfo/Footer');
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
        $this->form_validation->set_rules('Weight', 'Weight',  'trim|required');
        $this->form_validation->set_rules('Height', 'Height',  'trim|required');
        $this->form_validation->set_rules('Bloodpressure', 'Bloodpressure',  'trim|required');
        $this->form_validation->set_rules('Bloodtype', 'Bloodtype',  'trim|required');
        

            if($this->form_validation->run())
            {
                $data = array(
                    
                    'FullName'     => $this->input->post('FullName'),  
                    'Weight'     => $this->input->post('Weight'),
                    'Height'     => $this->input->post('Height'),
                    'Bloodpressure'      => $this->input->post('Bloodpressure'),
                    'Bloodtype'     => $this->input->post('Bloodtype')
                   
                   
                    
                    
                );

                $result = $this->initialrecord_model->add($data);
                if($result)
                {	
					$this->session->set_flashdata('msg', 'New user has been created');
					redirect('initialrecord');
				}		
				else
                {
					$this->session->set_flashdata('msg', 'New user creation failed');
					redirect('initialrecord/add');
				}
            }
            $this->load->view('initialrecord/add');
    }

    public function show($id)
    {
        $data['initialrecord'] = $this->initialrecord_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('initialrecord/edit', $data);
        
    }
    
    public function edit()
    {
        
        $this->form_validation->set_rules('FullName', 'FullName',  'trim|required');
        $this->form_validation->set_rules('Weight', 'Weight',  'trim|required');
        $this->form_validation->set_rules('Height', 'Height',  'trim|required');
        $this->form_validation->set_rules('Bloodpressure', 'Bloodpressure',  'trim|required');
        $this->form_validation->set_rules('Bloodtype', 'Bloodtype',  'trim|required');

        if($this->form_validation->run())
        {
            $id = $this->input->post('id');

            $data = array
            ( 
                    'FullName'     => $this->input->post('FullName'),   
                    'Weight'     => $this->input->post('Weight'),
                    'Height'     => $this->input->post('Height'),
                    'Bloodpressure'      => $this->input->post('Bloodpressure'),
                    'Bloodtype'     => $this->input->post('Bloodtype')
            );

            $result = $this->initialrecord_model->edit($id, $data);
            if($result)
            {	
				$this->session->set_flashdata('msg', 'Selected User has been created');
				redirect('initialrecord');
			}		
			else
            {
				$this->session->set_flashdata('msg', 'Selected User has been failed updated');
				redirect('initialrecord/show/' . $id);
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

        $result = $this->initialrecord_model->edit($id, $data);
        if($result)
        {	
			$this->session->set_flashdata('msg', 'Selected User has been created');
			redirect('initialrecord');
		}		
		else
        {
            $this->session->set_flashdata('msg', 'Selected User has been failed updated');
            redirect('initialrecord/delete/' . $id);
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

        $data['initialrecord'] = $this->initialrecord_model->row($id);
        // $this->load->view('template/header');
        // $this->load->view('template/nav');
        $this->load->view('initialrecord/view', $data);

        
        
    }

//     }
}