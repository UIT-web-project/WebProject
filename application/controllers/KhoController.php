<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhoController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('KhoView');
			
		}
	
	}
	
	/* End of file KhoController.php */
	
?>