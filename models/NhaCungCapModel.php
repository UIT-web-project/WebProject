<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhaCungCapModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$data = $this->db->get('nhacc');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file NhaCungCapModel.php */
	

?>
