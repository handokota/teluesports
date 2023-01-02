<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Division_model extends CI_Model {
        public function get_division(){
			$this->db->select('*');
            $this->db->from('division');
            return $data = $this->db->get()->result_array();
		}

        public function get_divisionByID($id){
			$this->db->select('*');
            $this->db->from('division');
            $this->db->where('id', $id);
            return $data = $this->db->get()->result_array();
		}

		public function delete_division($id) {
			$this->db->where('id', $id);
			$this->db->delete('division');
			if($this->db->affected_rows()>0){
				return true;
			} else {
				return false;
			}
		}
		
		public function cek_division($name){
			$this->db->select("*");
			$this->db->from("division");
			$this->db->where("division_name",$name);
			$check = $this->db->get()->result();
			if(count($check) == 0 || count($check) == 1) {
				return true;
			} else {
				return false;
			}
		}

		public function insert_division($data) {
			$this->db->insert("division", $data);
			if($this->db->affected_rows()>0) {
				return true;
			} else {
				return false;
			}
		}
		public function edit_division($data, $id) {
			$this->db->where('id', $id);
			$this->db->update("division", $data);
			if($this->db->affected_rows()>0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>