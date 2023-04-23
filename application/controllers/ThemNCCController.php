<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThemNCCController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('ThemNCCView');
		}
		public function ThemNCC()
		{
			$tenncc = $this->input->post('tenncc');
			$emailncc =  $this->input->post('emailncc');
			$sdtncc = $this->input->post('sdtncc');
			$diachincc = $this->input->post('dcncc');
			$wsncc = $this->input->post('wsncc');
			// echo $wsncc;
			// echo $tenncc;
			// echo $emailncc;
			// echo $sdtncc;
			// echo $diachincc;
			if($tenncc == "" || $emailncc == "" || $sdtncc == "" || $diachincc == "" || $wsncc == "")
			{
				echo "Vui lòng nhập đầy đủ thông tin";
			}
			else
			{
				$this->load->model('NhaCungCapModel');
				$this->NhaCungCapModel->ThemNCC($tenncc,$emailncc,$sdtncc,$diachincc,$wsncc);
				echo "Thêm thành công";
				header("Location:". base_url(). "index.php/NhaCungCapController");
			}
		}
	}
	
	/* End of file ThemNCCController.php */
	
?>