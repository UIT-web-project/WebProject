<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhachHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('KhachHangView');
			
		}
	
	}
	
	/* End of file KhachHangController.php */
	
?>