<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Event_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'homepage');
		$data["event"]=$this->Event_model->get_event();
		$this->load->view('homepage', $data);
	}
	public function login()
	{
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password")
		);
		if($this->User_model->select_user($data)) {
			$this->session->set_userdata('username', $data["username"]);
			redirect('admin');
		} else {
			$data["error_message"] = "Gagal Login"; 
			$this->load->view('homepage', $data);
		}

	}

	public function signout ()
	{
		$this->session->unset_userdata("username");
		redirect("/");
		
	}
}
