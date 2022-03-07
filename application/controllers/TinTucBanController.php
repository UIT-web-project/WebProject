<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class TinTucBanController extends CI_Controller {

	public function index()
	{
		$this->load->model('TinTucModel');
		$data = $this->TinTucModel->getData();
		$data = array(
			'arrResult' => $data
		);
		$this->load->view('TinTucBan', $data);
		
	}

}

/* End of file TinTucBanController.php */


?>