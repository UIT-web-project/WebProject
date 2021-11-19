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
		// xóa thông tin sản phẩm
		public function XoaTTSP($ttsp, $masp)
		{
			$this->db->select('*');
			$this->db->join($ttsp, $ttsp.'.masp = sanpham.masp');
			$this->db->where('sanpham.masp', $masp);
			$data = $this->db->get('sanpham');
			$data = $data->result_array();
			$mattsp = $data[0]['mattsp'];
			return $this->db->delete($ttsp, array('mattsp' => $mattsp));
			// return $data[0]['mattsp'];
		}
		// xóa sản phẩm
		public function XoaSP($table, $masp)
		{
			return $this->db->delete($table, array('masp' => $masp));
		}
	
	}
	
	/* End of file SanPhamModel.php */
	

?>
