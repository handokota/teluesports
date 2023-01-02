<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_member_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'admin_member');
		if($this->session->has_userdata("username")) {
			$this->load->view('submenu/admin_member');
		} else {
			redirect("Homepage_ctrl");
		}
	}

        


}
