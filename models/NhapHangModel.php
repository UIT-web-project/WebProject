<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class NhapHangModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			$this->db->join('nhanvien', 'phieunhap.MaNV = nhanvien.manv');
			$this->db->join('nhacc', 'nhacc.MaNCC = phieunhap.MaNCC');

			$data = $this->db->get('phieunhap');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file NhapHangModel.php */
	

?>
