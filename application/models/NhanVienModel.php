<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhanVienModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$data = $this->db->get('nhanvien');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file NhanVienModel.php */
	

?>