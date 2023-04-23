<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThemKMController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('ThemKMView');
		}
		public function ThemKM()
		{
			$soptkm = $this->input->post('soptkm');
			$sottt = $this->input->post('sottt');
			$ngaybd = $this->input->post('ngaybd');
			$ngaykt = $this->input->post('ngaykt');
			// echo $soptkm;
			// echo $sottt;
			// echo $ngaybd;
			// echo $ngaykt;
			$this->load->model('KhuyenMaiModel');
			$this->KhuyenMaiModel->ThemKM($soptkm,$ngaybd,$ngaykt,$sottt);
			header("Location:".base_url()."index.php/KhuyenMaiController");
		}
	
	}
	
	/* End of file ThemKMController.php */
	
?>