<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_ctrl extends CI_Controller {

    function __contruct() {
        parent::__contruct();
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'homepage');
		$this->load->view('homepage');
	}
}
