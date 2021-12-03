<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website {
    public function icon() {
		// $site 	= $this->CI->konfigurasi_model->listing();
		$icon 	= base_url('assets/images/logo.png');
		return $icon;
	}
}

?>