<?php
	
	class Panel extends Controller
	{
	
		function Panel()
		{
			parent::Controller();
			
			//$this->load->scaffolding('entries');
			$this->load->model('entries');
		}
		
		function index()
		{
			// bussines logic
			$view_data['model'] = $this->entries->getList();
			
			// load view
			$this->load->view('panel/index', $view_data);
		}
	
	}
	
?>