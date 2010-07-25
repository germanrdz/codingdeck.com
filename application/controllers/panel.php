<?php
	
	class Panel extends Controller
	{
	
		function Panel()
		{
			parent::Controller();
			
			//$this->load->scaffolding('entries');
			$this->load->model('entries');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->helper('date');
			
			date_default_timezone_set('America/Hermosillo');
			
			// allowing only German Rodriguez from Facebook
			define('FACEBOOK_APP_ID', '111858858866466');
			define('FACEBOOK_SECRET', '49a2adf64b488642ed1f0b530bf829b2');
			define('GERMANRODRIGUEZ_USERID', '757216207');
			
			$facebook = $this->_get_facebook_cookie(FACEBOOK_APP_ID, FACEBOOK_SECRET);		
			$access = FALSE;	
			
			if ($facebook)  {
				$user = json_decode(file_get_contents('https://graph.facebook.com/me?access_token=' .$facebook['access_token']));
				if ($user->id == GERMANRODRIGUEZ_USERID) {
					$access = TRUE;
				}
			}
			
			if (!$access) {
				redirect('//blog/index', 'refresh');
			}
					
			
		}
		
		function index($success = 0)
		{
			// bussines logic
			$view_data['model'] = $this->entries->getList();
			$view_data['validation'] = true;
			$view_data['successMsg'] = array(
				"New entry successfully saved",
				"Selected entry has been deleted"
				);
			
			$view_data['success'] = $success;

			// load view
			$this->load->view('panel/index', $view_data);
		}
		
		function create() {			
			// validation rules
			$this->form_validation->set_rules('Title', 'Title', 'required');
			$this->form_validation->set_rules('Body', 'Body', 'required');
			$validation = $this->form_validation->run();
			
			$view_data['validation'] = $validation;
			
			// if data valid save
			if ($validation)
			{
				
				if ($this->entries->saveEntry()) {
					// redirect to index and send success param (1)
					redirect('//panel/index/1', 'refresh');
				}
				else {
					$view_data["success"] = 0;
					// bussines logic
					$view_data['model'] = $this->entries->getList();
					
					$this->load->view('panel/index', $view_data);
				}
				
			}
			else
			{
				$view_data["success"] = 0; 
				$this->load->view('panel/index', $view_data);
			}			
		}
		
		function delete($id) {
			
			if ($this->db->delete('entries', array('id' => $id))) {
				redirect('//panel/index/2', 'refresh');
			}
			else {
				redirect('//panel/index/', 'refresh');
			}
			
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