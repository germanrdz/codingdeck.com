<?php

class entries extends Model {

	function getId($id) {
		$data = array();
		
		$this->db->where("Id", $id); 
		$query = $this->db->get("entries");
		
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

	function selectAll($perpage, $page) {
		$data = array();
		
		$this->db->order_by("Id", "desc"); 
		$query = $this->db->get("entries", $perpage, $page);
		
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
	
	function selectLast20() {
		$data = array();
		
		$this->db->order_by("Id", "desc"); 
		$query = $this->db->get('entries', 20);
		
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
	
	function getList() {
		$data = array();
		
		$this->db->select("Id, Title, Author, LastUpdated");
		$this->db->order_by("Id", "desc");
		$query = $this->db->get("entries");
		
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
	
	function saveEntry() {
		$data["Title"] = $this->input->post("Title");
		$data["Body"] = $this->input->post("Body");
		$data["CreationDate"] = time(); //date("m/d/Y"); 
		$data["LastUpdated"] = time(); //date("m/d/Y"); 
		$data["Author"] = $this->input->post("Author");
		
		return $this->db->insert("entries", $data);
	}

}

?>