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
	
	function insert() {
		$data["EntryId"] = $this->input->post("EntryId");
		$data["AuthorName"] = $this->input->post("AuthorName");
		$data["AuthorId"] = $this->input->post("AuthorId");
		$data["Body"] = nl2br(strip_tags($this->input->post("Body"))); //date("m/d/Y"); 
		$data["Date"] = time(); //date("m/d/Y"); 
		
		return $this->db->insert("comments", $data);
	}
	
}

?>