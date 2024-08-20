<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminController extends CI_Controller {

    public function adminRegisterpage(){
        $this->load->view('admin/register');
    }

    public function adminRegister() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('desgination', 'Desgination', 'required');
    
        if ($this->form_validation->run() === FALSE) {
            // Load the form view with validation errors
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin'); // Redirect back to the registration page
        } else {
            $result = $this->Register_model->saveData([
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'desgination' => $this->input->post('desgination'),
            ]);
            
            if ($result) {
                $this->session->set_flashdata('success', 'Record added successfully');
            } else {
                $this->session->set_flashdata('error', 'Failed to add record');
            }
            redirect('/adminlogin'); // Redirect to the login route
        }
    }

    public function adminlogin(){
        $this->load->view('admin/login');
    }



    public function getadmin() {
        $data['employee_data'] = $this->Register_model->getAllEmployees(); // Fetch employee data
        $this->load->view('admin/login', $data); // Load the view with data
    }
}
