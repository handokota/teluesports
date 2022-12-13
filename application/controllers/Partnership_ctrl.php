<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partnership_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'partnership');
		$data = [];
		$this->load->view('partnership', $data);
	}
}
