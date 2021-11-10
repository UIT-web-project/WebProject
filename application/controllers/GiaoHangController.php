<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class GiaoHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('GiaoHangView');
			
		}
	
	}
	
	/* End of file GiaoHangController.php */
	
?>