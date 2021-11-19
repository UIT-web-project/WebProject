<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class HoaDonModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$this->db->join('khachhang', 'khachhang.MaKH = hoadon.MaKH');
			$this->db->join('khuyenmai', 'khuyenmai.MaKM = hoadon.MaKM');
			$data = $this->db->get('hoadon');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file HoaDonModel.php */
	

?>
