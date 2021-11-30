<?php 


	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			// $this->db->from('sanpham');
			$data = $this->db->get('sanpham');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file AdminModel.php */
	


?>