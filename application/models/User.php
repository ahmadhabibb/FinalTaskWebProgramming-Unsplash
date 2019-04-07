<?php
    class User extends CI_Model {
        public function addUser() {
            $this->load->database();
            $data = [
                "first_name" => $this->input->post('first_name', true),
                "last_name" => $this->input->post('last_name', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
            ];
            return $this->db->insert('user', $data);
        }
        public function checkUser($email, $password) {
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            return $this->db->get('user')->row_array();
        }
        public function getUserById($id) {
		    $this->db->where('id', $id);
		    return $this->db->get('user')->row_array();
        }
        public function getAllPhotos() {
            return $this->db->get('photo');
        }
        public function uploadPhoto($id, $file_name) {
            $this->db->where('id', $id);
            $dataUser = $this->db->get('user')->row_array();
            $data = [
                "first_name" => $dataUser['first_name'],
                "last_name" => $dataUser['last_name'],
                "photo" => $file_name,
                "keyword" => $this->input->post('keyword', true),
            ];
            return $this->db->insert('photo', $data);
        }
        // private function uploadPhoto() {
        //     $config['upload_path']          = './assets/photoUser';
        //     $config['allowed_types']        = 'gif|jpg|png';
        //     $config['file_name']            = $this->first_name;
        //     $config['overwrite']			= true;
        //     // $config['max_size']             = 1024; // 1MB
        //     // // $config['max_width']            = 1024;
        //     // // $config['max_height']           = 768;

        //     $this->load->library('upload', $config);

        //     if ($this->upload->do_upload('image')) {
        //         return $this->upload->data("file_name");
        //     }
    
        //     return "default.jpg";
        // }
    }
?>