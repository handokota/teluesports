<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Event_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'event');
		$data = [];
		$data['event_data'] = $this->Event_model->get_allevent();
		$this->load->view('event', $data);
	}
}
