<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

	public function index() {
		$this->session->set_userdata('active_nav', 'partnership');
		$data = [];
		$this->load->view('submenu/partner', $data);
	}


	public function sendMail() {
		if(isset($_POST['submit_email'])) {
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			if(!empty($email)) {
				$config = [
					'mailtype' => 'text',
					'charset' => 'utf-8',
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_user' => 'handtejoatmoko@gmail.com',
					'smtp_pass' => 'kzmhyxtspjqeiehf',
					'smtp_port' => 465,
					'newline'   => "\r\n"
				];

				$this->load->library('email', $config);
				$this->email->initialize($config);

				$this->email->from('handtejoatmoko@gmail.com');
				$this->email->to($email);
				$this->email->subject($subject);
				$this->email->message($message);

				if($this->email->send()) {
					redirect('/Partner_ctrl');;
				} else {
					show_error($this->email->print_debugger());
				}
			}
		}
	}
}
