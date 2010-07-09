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
			// load main header
			$include["stylesheets"] = array();
			$include["scripts"] = array();
			$this->load->view('header', $include);
			
			// bussines logic
			$view_data['model'] = $this->entries->selectLast20();
			
			// load view
			//$this->load->view('blog/index', $view_data);
		
			// load footer
			$this->load->view('footer');
		}
	
	}
	
?>