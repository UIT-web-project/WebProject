<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThemMoiSPModel extends CI_Model {
		
		// Begin: Thêm xóa sửa loại sản phẩm
		public function ThemMoiLoaiSP($tenloaisp)
		{
			$data = array(
				'MaLoaiSP' => "",
				'TenLoaiSP' => $tenloaisp
			);
			$this->db->insert('loaisp', $data);
			return $this->db->insert_id();
		}
		public function XemLoaiSP()
		{
			$this->db->select('*');
			return $this->db->get('loaisp');
		}
		public function XoaLoaiSP($table, $maloaisp)
		{
			return $this->db->delete($table, array('MaLoaiSP' => $maloaisp));
		}
		// end: Thêm xóa sửa loại sản phẩm

		// begin: Thêm xóa sửa thương hiệu
		public function ThemMoiTH($tenth)
		{
			$data = array(
				'MaTH' => "",
				'TenTH' => $tenth
			);
			$this->db->insert('thuonghieu', $data);
			return $this->db->insert_id();
		}
		public function XemTH()
		{
			$this->db->select('*');
			return $this->db->get('thuonghieu');
		}
		public function XoaTH($table, $math)
		{
			return $this->db->delete($table, array('MaTH' => $math));
		}
		// end: Thêm xóa sửa thương hiệu
	
	}
	
	/* End of file ThemMoiSPModel.php */
	

?>
