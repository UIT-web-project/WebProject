<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class CTPNController extends CI_Controller {
	
		public function index()
		{
			// data nhà cung cấp
			$this->load->model('NhaCungCapModel');
			$dataNCC = $this->NhaCungCapModel->getData();
			// data nhân viên
			$this->load->model('NhanVienModel');
			$dataNV = $this->NhanVienModel->getData();
			// data sản phẩm
			$this->load->model('SanPhamModel');
			$dataSP = $this->SanPhamModel->getDataAllSP();
			
			$mapn = $this->input->get('mapn');
			$this->load->model('NhapHangModel');
			$data = $this->NhapHangModel->getDataByMaPN($mapn);
			$data = array(
				'arrResultPN' => $data,
				'arrResultNCC' => $dataNCC,
				'arrResultNV' => $dataNV,
				'arrResultSP' => $dataSP,
			);
			// var_dump($dataSP);
			$this->load->view('CTPNView', $data);
		}
		public function SuaPN()
		{
			$mapn = $this->input->get('mapn');
			echo $mapn;
		}
	
	}
	
	/* End of file CTPNController.php */
	
?>