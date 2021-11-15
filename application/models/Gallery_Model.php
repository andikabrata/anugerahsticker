<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class gallery_model extends CI_Model {
   
        // load database
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        // SELECT DATA Layanan 
        public function gallery() {
            $this->db->select('*');
            $this->db->from('tb_gallery');
            $query = $this->db->get();
            return $query->result();
        }

        //SELECT DATA FOR PAGINATION
        function data($number,$offset){
            return $query = $this->db->get('tb_gallery',$number,$offset)->result();		
        }

        function jumlah_data(){
            return $this->db->get('tb_gallery')->num_rows();
        }

    }


?>