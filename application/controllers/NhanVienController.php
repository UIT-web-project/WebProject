<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhanVienController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('NhanVienModel');
			$data = $this->NhanVienModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('NhanVienView', $data);
		}
	
	}
	
	/* End of file NhanVienController.php */
	
?>