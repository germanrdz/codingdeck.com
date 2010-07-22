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
			
			define('FACEBOOK_APP_ID', '111858858866466');
			define('FACEBOOK_SECRET', '49a2adf64b488642ed1f0b530bf829b2');
		}
		
		function index($page = 0)
		{
			$this->load->library('pagination');
			
			$facebook = $this->_get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);
			$include["login"] = $facebook;
			
			if ($facebook)  {
				$user = json_decode(file_get_contents('https://graph.facebook.com/me?access_token=' .$facebook['access_token']));
				$include["user"] = $user;
			}

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
		
		function _get_facebook_cookie($app_id, $application_secret) {
			
			if (isset($_COOKIE['fbs_' . $app_id])) {			
				$args = array();
				parse_str(trim($_COOKIE['fbs_' . $app_id], '\\"'), $args);
				ksort($args);
				$payload = '';
				
				foreach ($args as $key => $value) {
					if ($key != 'sig') {
						$payload .= $key . '=' . $value;
					}
				}
				
				if (md5($payload . $application_secret) != $args['sig']) {
					return null;
				}
				
				return $args;
			}
			
			return null;
		}
		
		

	}

?>