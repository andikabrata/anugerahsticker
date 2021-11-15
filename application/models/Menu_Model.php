<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class menu_model extends CI_Model {
   
        // load database
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        // SELECT DATA SUBMENU 
        public function submenu_layanan() {
            $this->db->select('tb_sub_menu.nama_submenu');
            $this->db->from('tb_menu');
            $this->db->join('tb_sub_menu', 'tb_menu.kode_menu = tb_sub_menu.kode_menu');
            $this->db->where('nama_menu = "Layanan"');
            $query = $this->db->get();
            return $query->result();
        }

        public function submenu_gallery() {
            $this->db->select('tb_sub_menu.nama_submenu');
            $this->db->from('tb_menu');
            $this->db->join('tb_sub_menu', 'tb_menu.kode_menu = tb_sub_menu.kode_menu');
            $this->db->where('nama_menu = "Gallery"');
            $query = $this->db->get();
            return $query->result();
        }

    }
    

?>