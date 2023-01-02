<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('Division_model');
    }

	public function index()
	{
		$this->session->set_userdata('active_nav', 'division');
		if($this->session->has_userdata("username")) {
			$this->load->view('submenu/admin');
		} else {
			redirect("Homepage_ctrl");
		}
	}
	public function getAllDivision(){
		$this->db->select('*');
		$this->db->from('division');
		$this->db->order_by('division_update_at', 'desc');
		$data = $this->db->get()->result_array();

		echo json_encode($data);
		exit;
	}
	public function delete($id) {
		if($this->Division_model->delete_division($id)) {
			
			redirect('/Admin_ctrl');
		} else {
			$data["error_message"] = "Gagal Hapus"; 
			$this->load->view('submenu/admin', $data);
		}
	}

	public function inputData()
    {
        if($this->Division_model->cek_division($this->input->post("division_name"))){
			$imageURL = substr(md5(uniqid(mt_rand(), true)), 0, 30)."_".$_FILES['division_image']['name'];
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/uploads/divisions/',
				"allowed_types" => 'png',
				"max_size" => 10000,
				"remove_spaces" => TRUE,
				"file_name" => $imageURL
			));

			$data = array(
				"division_name" => $this->input->post('division_name'),
				"division_achievement" => $this->input->post('division_achievement'),
				"division_requirement" => $this->input->post('division_requirement'),
				"division_image" => $imageURL,
				"division_create_at" => date('Y-m-d h:i:s'),
				"division_update_at" => date('Y-m-d h:i:s')
			);
			if (!$this->upload->do_upload('division_image')) {
				$data['gagal'] = "Ukuran file terlalu besar atau jenis file bukan jpg!";
				$this->index();
				$this->load->view('submenu/admin', $data);
			} else {
				if($this->Division_model->insert_division($data)){
				
					redirect('/Admin_ctrl');
		
				} else {
					$data['gagal'] = "Gagal menambahkan Divisi";
					$this->index();
					$this->load->view('submenu/admin', $data);   
				}
        	}
		}else {
			$data['gagal'] = "Gagal menambahkan Divisi karena Divisi sudah tersedia";
			$this->index();
			$this->load->view('submenu/admin', $data);
		}
		
        
    }
	public function editData($id)
    {
		if (!empty($_FILES['division_image']['name'])){
			//upload file and edit data
			if($this->Division_model->cek_division($this->input->post("division_name"))) {
				$imageURL = substr(md5(uniqid(mt_rand(), true)), 0, 30)."_".$_FILES['division_image']['name'];
				$initialize = $this->upload->initialize(array(
					"upload_path" => './assets/uploads/divisions/',
					"allowed_types" => 'png|jpg|jpeg',
					"max_size" => 10000,
					"remove_spaces" => TRUE,
					"file_name" => $imageURL
				));
	
				$data = array(
					"division_name" => $this->input->post('division_name'),
					"division_achievement" => $this->input->post('division_achievement'),
					"division_requirement" => $this->input->post('division_requirement'),
					"division_image" => $imageURL,
					"division_update_at" => date('Y-m-d h:i:s')
				);
				if (!$this->upload->do_upload('division_image')) {
					$data['gagal'] = "Ukuran file terlalu besar atau jenis file bukan jpg!";
					$this->index();
					$this->load->view('submenu/admin', $data);
				} else {
					if($this->Division_model->edit_division($data, $id)) {
						redirect('Admin_ctrl');
					} else {
						$data['gagal'] = "Gagal menambahkan Divisi";
						$this->index();
						$this->load->view('submenu/admin', $data);   
					}
				}
			}else {
				$data['gagal'] = "Gagal menambahkan Divisi karena Divisi sudah tersedia";
				$this->index();
				$this->load->view('submenu/admin', $data);
			}
		}else {
			//edit data only
			if($this->Division_model->cek_division($this->input->post("division_name"))){
				$data = array(
					"division_name" => $this->input->post('division_name'),
					"division_achievement" => $this->input->post('division_achievement'),
					"division_requirement" => $this->input->post('division_requirement'),
					"division_update_at" => date('Y-m-d h:i:s')
				);
				if($this->Division_model->edit_division($data, $id)){
						
					redirect('/Admin_ctrl');
		
				} else {
					$data['gagal'] = "Gagal menambahkan Divisi";
					$this->index();
					$this->load->view('submenu/admin', $data);   
			
				}
			}else{
				$data['gagal'] = "Gagal menambahkan Divisi karena Divisi sudah tersedia";
				$this->index();
				$this->load->view('submenu/admin', $data);
			}
		}
        
		
        
    }

}
