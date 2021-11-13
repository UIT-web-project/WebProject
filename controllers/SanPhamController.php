<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SanPhamController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('SanPhamModel');
			$data = $this->SanPhamModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('SanPhamView', $data);
		}
	
	}
	
	/* End of file SanPhamController.php */
	
?>