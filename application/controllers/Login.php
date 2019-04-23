<?php
    class Login extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            $this->load->library('form_validation');
	    }
        public function index(){
            // $this->load->view('resources/bootstrap');
            $this->load->library('form_validation');
		    $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $checkLogin = $this->User->checkUser($email, $password);

            if ($this->form_validation->run() == TRUE && !empty($checkLogin)) {
                $dataUser = $this->db->get('user');
                $this->session->set_userdata($checkLogin);
                redirect('/');
                // $this->session->set_flashdata('flash', 'Invalid Email or Password');
            }
            else {
                $this->load->view('login/index');
                $this->session->set_flashdata('flash', 'Invalid Email or Password');
            }
            // $this->load->view('resources/footer');
        }
        public function logout() {
            $this->session->sess_destroy();
            $this->session->unset_userdata($checkLogin);
<<<<<<< HEAD
            redirect('Welcome');
=======
            redirect('welcome');
>>>>>>> baf83476bd7aec30a65cffeb790feb81650e9994
        }
    }
?>