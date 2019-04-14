<?php 
    class edit extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            // $this->load->model('uploadPhoto', 'upl');
            $this->load->library('form_validation');
        }
        public function index() {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $id = $data['user']['id'];
            $photo = $this->User->getPhotoById($id);
            $data['dataPhoto'] = $photo;
            $this->load->view('edit/index', $data); 
        } 
        public function editProfile() {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('first_name', 'First Name');
		    $this->form_validation->set_rules('last_name', 'Last Name');
		    $this->form_validation->set_rules('email', 'Email');
            $this->form_validation->set_rules('username', 'Username');
            $this->form_validation->set_rules('site', 'Site');
            $this->form_validation->set_rules('location', 'Location');
            $this->form_validation->set_rules('instagram', 'Instagram');
            $this->form_validation->set_rules('twitter', 'Twitter');
            $this->form_validation->set_rules('bio', 'Bio');
            $this->form_validation->set_rules('interest', 'Interest');
            
            $upload = $_FILES['photoProfile'];

            if($upload) {
                $config['upload_path']          = './assets/photoProfile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max-size']             = 1024;
                $config['max-width']            = 1024;
                $config['max-height']           = 1024;
                $config['overwrite']			= true;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('photoProfile')) {
                    $data = array('upload_data' => $this->upload->data());
                    $file_name = $this->upload->data('file_name');
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                    $id_user = $data['user']['id'];
                    $this->User->updateProfile($id_user, $file_name);

                    redirect('edit');
                }
                else {
                    $file_name = $this->upload->data('file_name');
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                    $id_user = $data['user']['id'];
                    $this->User->updateProfileNoPhoto($id_user);
                    redirect('edit');
                }
            }
            else {
                $this->load->view('join');
            }
        }
    }
?>