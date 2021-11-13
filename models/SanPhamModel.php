<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SanPhamModel extends CI_Model {
	
		public function getData()
		{
			$this->db->select('*');
			// $this->db->from('sanpham');
			$this->db->join('loaisp', 'loaisp.MaLoaiSP = sanpham.maloaisp');
			$this->db->join('thuonghieu', 'thuonghieu.MaTH = sanpham.math');
			$data = $this->db->get('sanpham');
			$data = $data->result_array();
			return $data;
		}
	
	}
	
	/* End of file SanPhamModel.php */
	

?>