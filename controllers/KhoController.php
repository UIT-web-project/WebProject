<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhoController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('KhoModel');
			$data = $this->KhoModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('KhoView', $data);
		}
	
	}
	
	/* End of file KhoController.php */
	
?>
