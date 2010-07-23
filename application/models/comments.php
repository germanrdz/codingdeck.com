<?php

class comments extends Model {
	
	function getComments($entryId) {
		$data = array();
		
		$this->db->where("EntryId", $entryId); 
		$query = $this->db->get("comments");
		
		if ($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
		}
		
		$query->free_result();
		
		return $data;
	}
	
}

?>