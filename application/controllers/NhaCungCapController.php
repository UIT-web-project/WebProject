<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhaCungCapController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('NhaCungCapModel');
			$data = $this->NhaCungCapModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('NhaCungCapView', $data);
		}
	
	}
	
	/* End of file NhaCungCapController.php */
	
?>
