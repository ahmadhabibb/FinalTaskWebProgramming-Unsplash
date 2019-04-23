<?php
    class search extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
            // $this->load->model('uploadPhoto', 'upl');
            // $this->load->library('form_validation');
            // // $this->load->helper('download');
            // $this->load->helper(array('url','download'));
        }
        public function index() {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $first_name = $data['user']['first_name'];
            $photoAll = $this->User->getPhotoByName($first_name);
            $data['dataPhoto'] = $photoAll;
            $id = $data['user']['id'];
            $photo = $this->User->getPhotoById($id);
            $data['userPhoto'] = $photo;
            $allPhoto = $this->User->getAllPhotos();

            $keyword = $this->input->post('search', true);
            $data['keyword'] = $keyword;
            $searchPhoto = $this->User->searchPhoto($keyword);
            $data['result'] = $searchPhoto;
            // var_dump($searchPhoto);
            // die;
            if ($data['user'] == NULL) {
                $this->load->view('search/index', $data); 
            }
            else {
                $this->load->view('search/index_login', $data);
            }
            
        }
    }
?>