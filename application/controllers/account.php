<?php
    class account extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            // $this->load->model('uploadPhoto', 'upl');
            $this->load->library('form_validation');
            // $this->load->helper('download');
            $this->load->helper(array('url','download'));
        }
        public function index() {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            if ($data['user'] == NULL) {
                redirect('login');
            }
            else {
                $first_name = $data['user']['first_name'];
                $photoAll = $this->User->getPhotoByName($first_name);
                $data['dataPhoto'] = $photoAll;
                $id = $data['user']['id'];
                $photo = $this->User->getPhotoById($id);
                $data['userPhoto'] = $photo;
            }
            
            // $this->load->helper('download');
            $this->load->view('account/index', $data); 
        }
        public function upload() {
            $this->form_validation->set_rules('keyword', 'Keyword', 'required');
            $upload = $_FILES['image'];

            if($upload) {
                $data['keyword']                = $this->input->post('keyword');
                $config['upload_path']          = './assets/photoUser/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max-size']             = 10240;
                $config['max-width']            = 10240;
                $config['max-height']           = 10240;
                $config['overwrite']			= true;

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')) {
                    $data = array('upload_data' => $this->upload->data());
                    $file_name = $this->upload->data('file_name');
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                    $id_user = $data['user']['id'];
                    $dataPhotoUser = $this->User->uploadPhoto($id_user, $file_name);

                    redirect('account');
                }
                else {
                    $data = array('upload_data' => $this->upload->data());
                    $file_name = $this->upload->data('file_name');
                    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                    $id_user = $data['user']['id'];
                    $this->User->uploadPhoto($id_user, $file_name);
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('account/index', $error);
                }
            }
            else {
                $this->load->view('join');
            }
        }
    }
?>