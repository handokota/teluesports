<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisions_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('Division_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'division');
		$data = [];
		$data['division_data'] = $this->Division_model->get_division();
		$this->load->view('divisions', $data);
	}
	public function open_member($id)
	{
		$this->session->set_userdata('member', $id);
		redirect('/Member_ctrl');
	}
}
