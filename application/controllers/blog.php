<?php

class Blog extends Controller {
	
	function Blog() {
		parent::Controller();
		
		$this->load->scaffolding('entries');
		$this->load->model('entries');
	}
	
	function index() {
		// load main header
		$include["stylesheets"] = array("blog", "shCore", "shThemeDefault");
		$include["scripts"] = array("shCore", "shBrushCSharp");
		$this->load->view('header', $include);
		
		// bussines logic
		$view_data['model'] = $this->entries->selectLast20();
		
		// load view
		$this->load->view('blog/index', $view_data);
	
		// load footer
		$this->load->view('footer');
	}
	
	function comments($id) {
		echo "comments here " . $id;
	}
	
	function about() {
		
	}
	
	function contact() {
		echo "";
	}

}

?>