<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Division_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'aboutus');
		$data = [];
		$data['division_data'] = $this->Division_model->get_division();
		$this->load->view('aboutus', $data);
	}
}
