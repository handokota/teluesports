<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class User_model extends CI_Model 
	{
		public function insert_user($data)
		{
			$this->db->insert('user', $data);
			if($this->db->affected_rows()>0){
				return true;
			} else {
				return false;
			}
		}

	}
?>