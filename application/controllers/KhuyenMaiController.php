<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhuyenMaiController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('KhuyenMaiModel');
			$data = $this->KhuyenMaiModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('KhuyenMaiView', $data);
			
		}
	
	}
	
	/* End of file KhuyenMaiController.php */
	
?>
