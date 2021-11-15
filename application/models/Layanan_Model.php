<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class layanan_model extends CI_Model {
   
        // load database
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        // SELECT DATA Layanan 
        public function layanan() {
            $this->db->select('*');
            $this->db->from('tb_layanan');
            $query = $this->db->get();
            return $query->result();
        }

    }


?>