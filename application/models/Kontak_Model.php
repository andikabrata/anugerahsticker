<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class kontak_model extends CI_Model {
    
        // load database
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        // SELECT DATA
        public function listing() {
            $this->db->select('*');
            $this->db->from('kontak');
            $query = $this->db->get();
            return $query->row();
        }
    }


?>