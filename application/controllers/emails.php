<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class emails extends CI_Controller {

      public function __construct() {
            parent::__construct();
            $this->load->model('User');
            // $this->load->model('uploadPhoto', 'upl');
            $this->load->library('form_validation');
        }
      public function index()
      {
            $this->load->database();
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $first_name = $data['user']['first_name'];
            $photo = $this->User->getPhotoByName($first_name);
            $data['dataPhoto'] = $photo;
            $id = $data['user']['id'];
            $photo = $this->User->getPhotoById($id);
            $data['userPhoto'] = $photo;
            $this->load->view('emails/index', $data);
      }
}
?>

<!-- $this->load->database;
$data['user'] = $this->db-.get_where('user',['email => $this->session->userdata('email')])->row_array()
$first_name = $data['user']['first_name'];
$photo = $this->user->getphotobtname('$first_name');
$data['data_photo'] = $photo;
$id = $data['user']['id'];
$photo = $this->user->getphotoid($id);
$data['userphoto'] = $photo
$this->load->view('emails/index',$data) -->