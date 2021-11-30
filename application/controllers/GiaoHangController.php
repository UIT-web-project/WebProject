<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class GiaoHangController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('GiaoHangModel');
			$data = $this->GiaoHangModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('GiaoHangView', $data);
		}
	
	}
	
	/* End of file GiaoHangController.php */
	
?>