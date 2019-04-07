<?php
    class uploadPhoto extends CI_Model {
        // private $_id_photo;
        private $_first_name;
        private $_last_name;
        private $_photo;
        private $_keyword;
 
        public function setURL($photo) {
            $this->_photo = $photo;
        }
        public function setFirstName($data) {
            $this->_first_name = $data['user']['first_name'];
        }
        public function setLastName($data) {
            $this->_last_name = $data['user']['last_name'];
        }
        public function keyword($keyword) {
            $this->_keyword = $keyword;
        }

        // // get image
        // public function getPicture() {        
        //     $this->db->select(array('p.id_photo', 'p.first_name', 'p.last_name', 'p.keyword', 'p.photo'));
        //     $this->db->from('photo p');  
        //     $this->db->where('p.id', $this->_ID);     
        //     $query = $this->db->get();
        //     return $query->row_array();
        // }
        // insert image
        public function create() { 
            $data = array(
                'first_name' => $this->_first_name,
                'photo' => $this->_photo,
            );
            $this->db->insert('picture', $data);
            return $this->db->insert_id();
        }
    }
?>