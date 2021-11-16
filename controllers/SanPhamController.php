<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SanPhamController extends CI_Controller {
	
		public function index($trang=0)
		{
			$this->load->model('SanPhamModel');
			$data = $this->SanPhamModel->getData($trang);
			// lấy ra tổng số trang
			$SoTrang = $this->SanPhamModel->getSoTrang();
			// truyền data sang view
			$data = array(
				'arrResult' => $data,
				'SoTrang' => $SoTrang
			);
			$this->load->view('SanPhamView', $data);
		}
	
	}
	
	/* End of file SanPhamController.php */
	
?>
