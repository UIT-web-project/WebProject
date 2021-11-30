<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThemPNController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('ThemPNView');
			
		}
	
	}
	
	/* End of file ThemPNController.php */
	
?>