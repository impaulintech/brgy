<?php
class illness extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('illness_model');
        if(!$this->session->userdata('user'))
        redirect('login');
    }
    public function index()
    {
        $role = $this->session->userdata('role_id');
        if($role == 4 || $role == 3)
        {
        $data ['illness'] = $this->illness_model->rows();
        $this->load->view('templates/admin_header');
        $this->load->view('illness/index',$data);
        $this->load->view('templates/Footer');
        }
        elseif($role == 2)
        {
        $data ['illness'] = $this->illness_model->rows();
        $this->load->view('templates/hr_header');
        $this->load->view('illness/index',$data);
        $this->load->view('templates/Footer');
        }
        else
        {
        $this->session->sess_destroy();
        redirect('login');
        }
       
    }
public function add()
    {
        $this->form_validation->set_rules('ill_name', 'illness name',  'trim|required');
        $this->form_validation->set_rules('contagious',  'contagious');
        $this->form_validation->set_rules('danger_level',    'danger level');
        
            if($this->form_validation->run())
            {
                $data = array (
                    'ill_name'     => $this->input->post('ill_name'),
                    'contagious'    => $this->input->post('contagious'),
                    'danger_level'      => $this->input->post('danger_level')
                );

                $result = $this->illness_model->add($data);
                $role = $this->session->userdata('role_id');
                if($result)
                {
                    $this->session->set_flashdata('msg', 'New illness');
                    redirect('illness');
                }
                else
                {
                    $this->session->set_flashdata('msg', 'New illness creation failed');
                    redirect('illness/add');
                }
            }
     
        }

    public function show($ill_id)
    {
        $data['illness'] = $this->illness_model->row($ill_id);
        $this->load->view('templates/admin_header');
        $this->load->view('illness/edit', $data);
        $this->load->view('templates/Footer');
    }

    public function edit()
    {
        
        $this->form_validation->set_rules('ill_name', 'illness name',  'trim|required');
        $this->form_validation->set_rules('contagious',  'contagious');
        $this->form_validation->set_rules('danger_level',    'danger level');
        
            if($this->form_validation->run())
            {
                $ill_id=$this->input->post('ill_id');
                $data = array (
                    'ill_name'     => $this->input->post('ill_name'),
                    'contagious'    => $this->input->post('contagious'),
                    'danger_level'      => $this->input->post('danger_level')
                   
                );
                    $result = $this->illness_model->edit($ill_id, $data);
                    if($result){
                    $this->session->set_flashdata('msg', 'Selected user has been updated');
                    redirect('illness');
                      }
                    else{
                    $this->session->set_flashdata('msg', 'Selected user has been failed updated ');
                    redirect('illness/show/'.$ill_id);
                    }
                    
             }

    }

}