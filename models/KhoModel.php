<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhoModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$data = $this->db->get('kho');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file KhoModel.php */
	

?>
