<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends CI_Controller {
	
		public function index()
		{
			// $this->load->helper('url');
			$this->load->view('AdminView');
			// echo 1;
		}
	
	}
	
	/* End of file Controllername.php */
	
?>