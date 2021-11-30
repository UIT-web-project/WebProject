<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhapHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('NhapHangModel');
			$data = $this->NhapHangModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('NhapHangView', $data);
		}
	
	}
	
	/* End of file NhapHangController.php */
	
?>
