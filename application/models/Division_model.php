<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Division_model extends CI_Model 
	{
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

        

	}
?>