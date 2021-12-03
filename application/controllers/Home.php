<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('Kontak_Model');
        $this->load->model('Menu_Model');
        $this->load->model('Layanan_Model');
        $this->load->model('Gallery_Model');
        $this->load->model('Video_Model');
    }

    public function index(){
        $kontak = $this->Kontak_Model->listing();
        $sub_layanan = $this->Menu_Model->submenu_layanan();
        $sub_gallery = $this->Menu_Model->submenu_gallery();
        $layanan = $this->Layanan_Model->layanan();
        $gallery = $this->Gallery_Model->gallery();
        $video =  $this->Video_Model->video();

        //Pagination
        $jumlah_data = $this->Gallery_Model->jumlah_data();
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/Home/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 8;
		$from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data = array(
            'kontak' => $kontak,
            'sub_layanan' => $sub_layanan,
            'sub_gallery' => $sub_gallery,
            'layanan' => $layanan,
            'gallery' => $gallery,
            'user' => $this->Gallery_Model->data($config['per_page'],$from),
            'video' => $video,
			'isi' => 'home/list'
        );

        $this->load->view('layout/wrapper', $data);
    }

}
?>