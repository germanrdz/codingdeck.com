<?php

	class Blog extends Controller
	{
		
		function Blog()
		{
			parent::Controller();
			
			//$this->load->scaffolding('entries');
			$this->load->model('entries');
			$this->load->helper('date');
			date_default_timezone_set('America/Hermosillo');
		}
		
		function index($page = 0)
		{
			$this->load->library('pagination');
			
			$config['base_url'] = base_url() . "index.php/blog/index/";
			$config['total_rows'] = $this->db->count_all('entries');
			$config['per_page'] = '5';
			$this->pagination->initialize($config); 
			
			// load main header
			$include["stylesheets"] = array("blog", "shCore", "shThemeDefault");
			$include["scripts"] = array("shCore", "shBrushCSharp", "shBrushJScript");
			$this->load->view('header', $include);
			
			// bussines logic
			//$view_data['model'] = $this->entries->selectLast20();
			$view_data['model'] = $this->entries->selectAll(5, $page);
			
			// load view
			$this->load->view('blog/index', $view_data);
		
			// load footer
			$this->load->view('footer');
		}
		
		function comments($id)
		{
			echo "comments here " . $id;
		}
		
		function about()
		{
			echo "about me";
		}
		
		function contact()
		{
			echo "contact me";
		}

	}

?>