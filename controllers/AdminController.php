<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('AdminModel');
			$data = $this->AdminModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('AdminView', $data);
			
		}
	
	}
	
	/* End of file Controllername.php */
	
?>
