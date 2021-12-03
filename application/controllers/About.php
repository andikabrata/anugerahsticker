<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('Kontak_Model');
        $this->load->model('Menu_Model');
        $this->load->model('Layanan_Model');
        $this->load->model('Gallery_Model');
        $this->load->model('Video_Model');
    }

    // Read berita detail
	public function read()	{

        $kontak = $this->Kontak_Model->listing();
        $sub_layanan = $this->Menu_Model->submenu_layanan();
        $sub_gallery = $this->Menu_Model->submenu_gallery();
		
		$data = array(
            'kontak' => $kontak,
            'sub_layanan' => $sub_layanan,
            'sub_gallery' => $sub_gallery,
			'isi' => 'about/about_page'
        );
		$this->load->view('layout/wrapper', $data, FALSE);
	}


}
?>