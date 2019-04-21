<?php
    class join extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            $this->load->library('form_validation');
	    }
        public function index() {
            // $this->load->view('resources/bootstrap');
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
		    $this->form_validation->set_rules('last_name', 'Last Name', 'required');
		    $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('join/index');
            }
            else {
                $email = $this->input->post('email', true);
                $checkEmail = $this->User->checkEmail($email);
                
                if ($checkEmail == TRUE) {
                    $this->User->addUser();
                    redirect('login');
                    echo "ADA";
                }
                else if ($checkEmail == FALSE) {
                    
                    $this->session->set_flashdata('flash', 'Email is already in Database');
                    redirect('join');
                }
                
            }
            // $this->load->view('resources/footer');
        }
        
        
    }
?>