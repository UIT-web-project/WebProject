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
		public function XoaNCC()
		{
			$this->load->model('NhaCungCapModel');
			$mancc = $this->input->get('mancc');
			// echo $mancc;
			$query = $this->NhaCungCapModel->XoaNCC($mancc);
			if(!$query)
			{
				echo "Xóa thành công";
				header("Location:". base_url() ."index.php/NhaCungCapController/");
			}
			else
			{
				echo "Xóa thất bại";
			}
		}
	
	}
	
	/* End of file NhaCungCapController.php */
	
?>