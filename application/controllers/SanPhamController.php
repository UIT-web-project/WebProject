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
		public function XoaSP()
		{
			$masp = $this->input->get('masp');
			// echo $masp;
			$this->load->model('SanPhamModel');
			
			// print_r ($this->SanPhamModel->XoaTTSP('thongtinsp', $masp));

			if($this->SanPhamModel->XoaTTSP('thongtinsp', $masp) == true)
			{	
				if($this->SanPhamModel->XoaSP('sanpham', $masp) == true) {
					echo 1;
					header("Location: /do_an_web_thu_2/index.php/SanPhamController");
				}
				else {
					echo 0;
				}
			}
			else
			{
				echo 0;
			}
			
		}
	
	}
	
	/* End of file SanPhamController.php */
	
?>