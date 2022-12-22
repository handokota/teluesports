<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Event_model extends CI_Model 
	{
        public function get_event(){
			$condition = array(
                "MONTH(event_date_start)" => date("m"),
                "YEAR(event_date_start)" => date("Y"),
            );
			$this->db->select('DAY(event_date_start) as day');
			$this->db->from('event');
			$this->db->where($condition);
			return $data = $this->db->get()->result_array();
		}
	}
?>