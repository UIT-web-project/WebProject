<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class SanPhamModel extends CI_Model {
	
		public function getData($trang)
		{
			$SoSPTrongTrang = 7;
			if($trang == 0) {
				$trang = 1;
			}
			$offset = ($trang - 1) * $SoSPTrongTrang;
			$this->db->select('*');
			// $this->db->from('sanpham');
			$this->db->join('loaisp', 'loaisp.MaLoaiSP = sanpham.maloaisp');
			$this->db->join('thuonghieu', 'thuonghieu.MaTH = sanpham.math');
			$data = $this->db->get('sanpham', $SoSPTrongTrang, $offset);
			$data = $data->result_array();
			return $data;
		}
		// lấy số trang theo số sản phẩm trong trang
		public function getSoTrang()
		{
			$SoSPTrongTrang = 7;
			$this->db->select('*');
			$res = $this->db->get('sanpham');
			$res = $res->result_array();
			$TongSoSanPham = count($res);
			$SoTrang = ceil($TongSoSanPham/$SoSPTrongTrang);
			return $SoTrang;
		}
	
	}
	
	/* End of file SanPhamModel.php */
	

?>