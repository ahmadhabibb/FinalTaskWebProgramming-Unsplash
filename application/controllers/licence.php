<?php
    class licence extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('User');
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
            $data['foto'] = $this->User->getAllPhotos();

            
            // $this->load->view();  
            if ($data['user'] == NULL) {
                $this->load->view('licence/index',$data);
            }
            else {
                $this->load->view('licence/index_login',$data);
            } 
        }
    }
?>