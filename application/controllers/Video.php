<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->model('Kontak_Model');
        $this->load->model('Menu_Model');
        $this->load->model('Layanan_Model');
        $this->load->model('Gallery_Model');
        $this->load->model('Video_Model');
    }

    // Read berita detail
	public function read($param_link)	{

        $kontak = $this->Kontak_Model->listing();
        $sub_layanan = $this->Menu_Model->submenu_layanan();
        $sub_gallery = $this->Menu_Model->submenu_gallery();


		$video 	= $this->Video_Model->read($param_link);
		$list_video =  $this->Video_Model->video();
		
		$data = array(
            'kontak' => $kontak,
            'sub_layanan' => $sub_layanan,
            'sub_gallery' => $sub_gallery,
            'video' => $video,
			'list_video' => $list_video,
			'isi' => 'video/video_page'
        );
		$this->load->view('layout/wrapper', $data, FALSE);
	}


}
?>