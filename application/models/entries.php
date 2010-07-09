<?php

class entries extends Model {

	function selectAll() {
		$data = array();
		
		$this->db->order_by("Id", "desc"); 
		$query = $this->db->get('entries', 20);
		
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		$query->free_result();
		
		return $data;
	}
	
	function selectLast20() {
		$data = array();
		
		$this->db->order_by("Id", "desc"); 
		$query = $this->db->get('entries');
		
		if ($query->num_rows() > 0) {
			foreach($query->result() as $row) {
				$data[] = $row;
			}
		}
		
		$query->free_result();
		
		return $data;		
	}

}

?>