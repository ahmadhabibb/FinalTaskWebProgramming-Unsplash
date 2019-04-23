<?php
    class c_explorer extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('User');
        }
        public function index(){
             $container['foto'] = $this->User->getAllPhotos();
            $this->load->view('product/explore',$container);
            // $this->load->view();         
        }

        public function collection(){
            $content['tag'] = $this->User->getKeyword();
            $content['foto'] = $this->User->getAllPhotos();
            // $this->load->view();
            $this->load->view('product/collection',$content);
        }

        public function license(){
            $this->load->view('license');
        }
    }
?>