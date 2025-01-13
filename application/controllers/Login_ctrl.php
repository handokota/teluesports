<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load User_model for user operations
    }

    public function index() {
        $this->session->set_userdata('active_nav', 'login');
        // Load the login view
        $data = [];
        if ($this->session->flashdata('error_message')) {
            $data['error_message'] = $this->session->flashdata('error_message');
        }
        $this->load->view('login', $data); // Assuming the view is named 'login.php'
    }

    public function process() {
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password")
		);
		if($this->User_model->select_user($data)) {
			$this->session->set_userdata('username', $data["username"]);
			redirect('admin');
		} else {
			$data["error_message"] = "Invalid username or password!"; 
			// $data['event'] = $this->Event_model->get_event(); // Pastikan data event diambil
			$this->load->view('login', $data);
		}

	}

    public function logout() {
        $this->session->unset_userdata("username");
        redirect("/");
    }
}
