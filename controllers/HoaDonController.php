<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class HoaDonController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('HoaDonModel');
			$data = $this->HoaDonModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('HoaDonView', $data);
			
		}
	
	}
	
	/* End of file HoaDonController.php */
	
?>