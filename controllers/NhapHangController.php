<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhapHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('NhapHangView');
			
		}
	
	}
	
	/* End of file NhapHangController.php */
	
?>