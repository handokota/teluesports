<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class User_model extends CI_Model {
		public function insert_user($data) {
			$this->db->insert('user', $data);
			if($this->db->affected_rows()>0){
				return true;
			} else {
				return false;
			}
		}
		
		function select_user($data) {
			$condition = [
				"username"=>$data["username"],
				"password"=>$data["password"]
			];
			$this->db->select("*");
			$this->db->from("user");
			$this->db->where($condition);
			$check = $this->db->get()->result();
			if(count($check)>0) {
				return true;
			} else {
				return false;
			}
		}

		public function delete_user($id) {
			$this->db->where('id', $id);
			$this->db->delete('user');
			if($this->db->affected_rows()>0){
				return true;
			} else {
				return false;
			}
		}
	}
?>