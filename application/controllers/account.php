<?php
    class account extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            // $this->load->model('uploadPhoto', 'upl');
            $this->load->library('form_validation');
        }
        public function index() {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['photo'] = $this->User->getAllPhotos(); 
            $this->load->view('account/index', $data); 
        }
        public function upload() {
            $this->form_validation->set_rules('keyword', 'Keyword', 'required');
            
            $upload = $_FILES['image'];
            // $file_name = $upload('file_name');
            // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            // $id_user = $data['user']['id'];
            // $this->User->uploadPhoto($id_user, $file_name);

            if($upload) {
                $data['keyword'] = $this->input->post('keyword');

                $config['upload_path']          = './assets/photoUser/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['file_name']            = $this->first_name;
                $config['overwrite']			= true;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    // $data = $this->upload->data();
                    $data = array('upload_data' => $this->upload->data());
                    $file_name = $this->upload->data('file_name');
                    // $this->db->set('photo', $file_name);

            //         $upload = $_FILES['image'];
            // $file_name = $upload('file_name');
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                    $id_user = $data['user']['id'];
                    $this->User->uploadPhoto($id_user, $file_name);

                    // $this->User->uploadPhoto($data, $file_name);
                    
                    redirect('account');
                }
                else {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('account/index', $error);
                }
            }
            else {
                $this->load->view('join');
            }
        } 
        public function edit() {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            // $data['photo'] = $this->User->getAllPhotos(); 
            $this->load->view('account/edit/index', $data); 
        } 
    
    }
?>