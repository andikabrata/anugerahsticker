<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sitemap extends CI_Controller {


    /**
     * Index Page for this controller.
     *
     */
    public function index()
    {
        $data['urls'] = array(
            base_url('head'),
            base_url('layanan'),
            base_url('gallery'),
            base_url('about'),
            base_url('video/read/printing-sticker'),
            base_url('video/read/coming-soon')
        );

        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view('sitemap', $data);
    }
}