<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class video_model extends CI_Model {
   
        // load database
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        // SELECT DATA Layanan 
        public function video() {
            $this->db->select('*');
            $this->db->from('tb_video');
            $query = $this->db->get();
            return $query->result();
        }

        // Read data
	    public function read($param_link) {
            $this->db->select('nama_video, file_video, keterangan_video');
            $this->db->from('tb_video');
            // Join dg 2 tabel
            $this->db->where('nama_param_link',$param_link);
            $query = $this->db->get();
            return $query->row();
	    }

    }


?>