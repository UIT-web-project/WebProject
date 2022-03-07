<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class HoTroController extends CI_Controller {
	
		public function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('logged_in') === TRUE){
				redirect('TrangChuController', 'refresh');
			}
			else {
				if($this->session->userdata('is_NV') === FALSE){
					redirect('TrangChuController', 'refresh');
				}
			}
		}
		
		public function index()
		{
			$this->load->view('HoTroView');
			
		}
	
	}
	
	/* End of file HoTroController.php */
	
?>