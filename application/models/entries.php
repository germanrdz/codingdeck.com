<?php

class entries extends Model {

	function selectAll() {
		$data = array();
		
		$this->db->order_by("Id", "desc"); 
		$query = $this->db->get('entries');
		
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
		//$post = $this->input->post();
	
		date_default_timezone_set('America/Hermosillo');
		/*
		$data["Title"] = $post["Title"];
		$data["Body"] = $post["Body"];
		$data["CreationDate"] = date("m/d/Y"); 
		$data["LastUpdated"] = date("m/d/Y");
		$data["Author"] =  $post["Author"];
		*/
		
		$data["Title"] = $this->input->post("Title");
		$data["Body"] = $this->input->post("Body");
		$data["CreationDate"] = date("m/d/Y"); 
		$data["LastUpdated"] = date("m/d/Y"); 
		$data["Author"] = $this->input->post("Author");
		
		return $this->db->insert("entries", $data);
	}

}

?>