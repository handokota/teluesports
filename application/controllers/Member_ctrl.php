<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Division_model');
        $this->load->model('User_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'division');
		$data = [];
        $data['data_division'] = $this->Division_model->get_divisionByID($this->session->userdata('member'));
		$this->load->view('submenu/member', $data);
	}

    public function inputData()
    {
        $imageURL = substr(md5(uniqid(mt_rand(), true)), 0, 30)."_".$_FILES['inputFile']['name'];
        $initialize = $this->upload->initialize(array(
            "upload_path" => './assets/uploads/user/',
            "allowed_types" => 'jpg|png|jpeg',
            "max_size" => 10000,
            "remove_spaces" => TRUE,
            "file_name" => 'KTM_' . $imageURL
        ));

        $this->form_validation->set_rules('fname', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('lname', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('username', 'trim|required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]');
        

        if ($this->form_validation->run() == FALSE)
        {
            $data['gagal'] = "Mohon maaf anda gagal melakukan registrasi.";
            $this->index();
            $this->load->view('submenu/member', $data);
        }
        else
        {
            $data = array(
                "fname" => $this->input->post('fname'),
                "lname" => $this->input->post('lname'),
                "username" => $this->input->post('username'),
                "password" => $this->input->post('password'),
                "division" => $this->input->post('division'),
                "file_url" => $imageURL,
                "create_at" => date('Y-m-d h:i:s')
            );
            if (!$this->upload->do_upload('inputFile')) {
                $data['gagal'] = "Ukuran file terlalu besar atau jenis file bukan jpg!";
                $this->index();
                $this->load->view('submenu/member', $data);
            } else {
                
                if($this->User_model->insert_user($data)){
                
                    redirect('homepage');
        
                } else {
                    $data['gagal'] = "Mohon anda gagal melakukan registrasi.";
                    $this->index();
                    $this->load->view('submenu/member', $data);   
                }
            }
        }

        
        
    }
}
