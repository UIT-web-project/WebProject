<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhuyenMaiController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('KhuyenMaiModel');
			$data = $this->KhuyenMaiModel->getData();
			$data = array("arrResult" => $data);
			// truyền data sang view
			$this->load->view('KhuyenMaiView', $data);
			
		}
		public function XoaKM()
		{
			$makm = $this->input->get('makm');
			$this->load->model('KhuyenMaiModel');
			$query = $this->KhuyenMaiModel->XoaKM($makm);
			if(!$query)
			{
				echo "Xóa thành công";
				header("Location:". base_url() . "index.php/KhuyenMaiController");
			}
			else
			{
				echo "Xóa thất bại";
			}
		}
	
	}
	
	/* End of file KhuyenMaiController.php */
	
?>