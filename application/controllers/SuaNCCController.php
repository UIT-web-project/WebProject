<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SuaNCCController extends CI_Controller {
	
		public function index()
		{
			$mancc = $this->input->get('mancc');
			$this->load->model('NhaCungCapModel');
			$data = $this->NhaCungCapModel->getDataByMaNCC($mancc);
			$data = array(
					'arrResult' => $data
			);
			// var_dump($data);
			// echo $mancc;
			$this->load->view('SuaNCCView', $data);
		}
		public function SuaNCC()
		{
			$mancc = $this->input->get('mancc');
			$tenncc = $this->input->post('tenncc');
			$emailncc =  $this->input->post('emailncc');
			$sdtncc = $this->input->post('sdtncc');
			$diachincc = $this->input->post('dcncc');
			$wsncc = $this->input->post('wsncc');
			$this->load->model('NhaCungCapModel');
			$query = $this->NhaCungCapModel->SuaNCC($mancc, $tenncc, $emailncc, $sdtncc, $diachincc, $wsncc);
			if(!$query)
			{
				echo "OK";
				header("Location:". base_url() ."index.php/NhaCungCapController/");
			}
			else
			{
				echo "FAIL";
			}
			
		}
	
	}
	
	/* End of file SuaNCCController.php */
	
?>