<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhachHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('KhachHangModel');
			$data = $this->KhachHangModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('KhachHangView', $data);
		}
	
	}
	
	/* End of file KhachHangController.php */
	
?>