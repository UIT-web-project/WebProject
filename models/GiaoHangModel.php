<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class GiaoHangModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$this->db->join('hoadon', 'hoadon.MaHD = giaohang.MaHD');
			$this->db->join('nhanvien', 'nhanvien.MaNV = giaohang.MaNV');
			$data = $this->db->get('giaohang');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file GiaoHangModel.php */
	

?>
