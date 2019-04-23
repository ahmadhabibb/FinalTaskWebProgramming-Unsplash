<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->model('User');
		// $this->load->model('uploadPhoto', 'upl');
		// $this->load->library('form_validation');
		// // $this->load->helper('download');
		// $this->load->helper(array('url','download'));
	}
	public function index()
	{
		$this->load->database();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$first_name = $data['user']['first_name'];
		$photoAll = $this->User->getPhotoByName($first_name);
		$data['dataPhoto'] = $photoAll;
		$id = $data['user']['id'];
		$photo = $this->User->getPhotoById($id);
		$data['userPhoto'] = $photo;
		$allPhoto = $this->User->getAllPhotos();
		// $cariFirstName =  $allPhoto['first_name'];
		// var_dump($allPhoto);
		// die;	
		// $joinTable = $this->User->joinTable($cariFirstName);
		$data['allPhoto'] = $allPhoto;
		
		if ($data['user'] == NULL) {
			$this->load->view('index', $data); 
		}
		else {
			$this->load->view('index_login', $data);
		}
	}
}
