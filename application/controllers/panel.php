<?php
	
	class Panel extends Controller {
	
		function Panel() {
			parent::Controller();
			
			//$this->load->scaffolding('entries');
			$this->load->model('entries');
		}
		
		function index() {
			echo "panel";
		}
	
	}
	
?>