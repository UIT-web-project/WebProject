<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class KhuyenMaiModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$this->db->join('sanpham', 'sanpham.masp = khuyenmai.MaSP');
			$data = $this->db->get('khuyenmai');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file KhuyenMaiModel.php */
	

?>
