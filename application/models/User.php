<?php
    class User extends CI_Model {
        public function checkEmail($email) {
            // $this->load->database();
            // $email = $this->input->post('email', true);
            $this->db->where('email', $email);
            $check = $this->db->get('user')->row_array();
            if ($check == NULL) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
        public function addUser() {
            $this->load->database();
            
            $data = [
                "first_name" => $this->input->post('first_name', true),
                "last_name" => $this->input->post('last_name', true),
                "email" => $this->input->post('email', true),
                "username" => $this->input->post('username', true),
                "password" => $this->input->post('password', true),
                "photo" => 'default.jpg'
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
            return $this->db->get('photo')->result_array();
        }
        public function getPhotoByName($first_name) {
            $this->db->where('first_name', $first_name);
            return $this->db->get('photo')->result_array();
        }
        public function getPhotoById($id) {
            $this->db->where('id', $id);
            return $this->db->get('user')->result_array();
        }
        public function uploadPhoto($id, $file_name) {
            $this->db->where('id', $id);
            $dataUser = $this->db->get('user')->row_array();
            $data = [
                "first_name" => $dataUser['first_name'],
                "last_name" => $dataUser['last_name'],
                "username" => $dataUser['username'],
                "photo" => $file_name,
                "keyword" => $this->input->post('keyword', true),
                "photoUser" => $dataUser['photo'],
            ];
            return $this->db->insert('photo', $data);
        }
        public function updateProfile($id, $file_name) {
            $data = [
                "first_name"             => $this->input->post('first_name', true),
                "last_name"              => $this->input->post('last_name', true),
                // "email"                  => $this->input->post('email', true),
                "username"               => $this->input->post('username', true),
                "site"                   => $this->input->post('site', true),
                "location"               => $this->input->post('location', true),
                "instagram"              => $this->input->post('instagram', true),
                "twitter"                => $this->input->post('twitter', true),
                "bio"                    => $this->input->post('bio', true),
                "interest"               => $this->input->post('interest', true),
                "photo"                  => $file_name,
            ];
            $this->db->set('first_name', $data['first_name']);
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
        }
        public function updateProfileNoPhoto($id) {
            $data = [
                "first_name"             => $this->input->post('first_name', true),
                "last_name"              => $this->input->post('last_name', true),
                // "email"                  => $this->input->post('email', true),
                "username"               => $this->input->post('username', true),
                "site"                   => $this->input->post('site', true),
                "location"               => $this->input->post('location', true),
                "instagram"              => $this->input->post('instagram', true),
                "twitter"                => $this->input->post('twitter', true),
                "bio"                    => $this->input->post('bio', true),
                "interest"               => $this->input->post('interest', true),
            ];
            $this->db->set('first_name', $data['first_name']);
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
        }
    }
?>