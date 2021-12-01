<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhoController extends CI_Controller {
	
		public function index()
		{
			$this->load->model('KhoModel');
			$data = $this->KhoModel->getData();
			$data = array("arrResult" => $data);

			// truyền data sang view
			$this->load->view('KhoView', $data);
		}
		public function ThemKho()
		{
			$tenkho = $this->input->post('tenkho');
			$vitri = $this->input->post('vitri');
			$this->load->model('KhoModel');
			$this->KhoModel->ThemKho($tenkho, $vitri);
			$linkChuyenHuong = base_url() . "index.php/KhoController";
			header("Location: $linkChuyenHuong");
		}
		public function XoaKho()
		{
			$makho = $this->input->get('makho');
			echo $makho;
			echo 123;
			$this->load->model('KhoModel');
			if($this->KhoModel->XoaKho('kho', $makho) == true)
			{	
				echo 44;
				header("Location: /do_an_web_thu_2/index.php/KhoController");
			}
			else {
				echo 0;
			}
		}
		public function SuaKho()
		{
			$makho = $this->input->post('makho_edit');
			$tenkho = $this->input->post('tenkho_edit');
			$vitri = $this->input->post('vitri_edit');
			$this->load->model('KhoModel');
			$query = $this->KhoModel->SuaKho($makho, $tenkho, $vitri);
			if(!$query)
			{
				echo 1;
				header("Location: /do_an_web_thu_2/index.php/KhoController");
			}
			else {
				echo 0;
			}		
		}
	}

/* End of file KhoController.php */

?>