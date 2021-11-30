<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhachHangModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$data = $this->db->get('khachhang');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file KhachHangModel.php */
	

?>
