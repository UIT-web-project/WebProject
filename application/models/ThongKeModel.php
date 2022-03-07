<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThongKeModel extends CI_Model {
	
		public function countHD()
		{
			$this->db->select('count(*) as total');
			$this->db->where('TinhTrangTT', 1);
			$data = $this->db->get('hoadon');
			$data = $data->result_array();
			return $data;
		}
		public function countSP()
		{
			$this->db->select('count(*) as total');
			$data = $this->db->get('thongtinsp');
			$data = $data->result_array();
			return $data;
		}
		public function countNCC()
		{
			$this->db->select('count(*) as total');
			$data = $this->db->get('nhacc');
			$data = $data->result_array();
			return $data;
		}
		public function countKH()
		{
			$this->db->select('count(*) as total');
			$data = $this->db->get('khachhang');
			$data = $data->result_array();
			return $data;
		}
		public function DoanhThu($thang, $nam)
		{
			$this->db->select('sum(TongTienTT) as total');
			$this->db->where('TinhTrangTT', 1);
			$this->db->where('MONTH(NgayLapHD)', $thang);
			$this->db->where('YEAR(NgayLapHD)', $nam);
			$data = $this->db->get('hoadon');
			$data = $data->result_array();
			return $data;
		}
		public function TongDoanhThu($nam)
		{
			$this->db->select('sum(TongTienTT) as total');
			$this->db->where('TinhTrangTT', 1);
			// $this->db->where('MONTH(NgayLapHD)', $thang);
			$this->db->where('YEAR(NgayLapHD)', $nam);
			$data = $this->db->get('hoadon');
			$data = $data->result_array();
			return $data;
		}
		public function SPBanChay()
		{
			$this->db->select('sp2.tensp, sp.masp, sp.mattsp, sp.mausac, sp.ram, sum(cthd.SoLuong) as "total"');
			// $this->db->from('cthd cthd');
			$this->db->join('hoadon hd', 'hd.MaHD = cthd.MaHD');
			$this->db->join('thongtinsp sp', 'sp.masp = cthd.MaTTSP');
			$this->db->join('sanpham sp2', 'sp2.masp = sp.masp');
			$this->db->where('hd.TinhTrangTT', 1);
			$this->db->group_by('sp.mattsp');
			$this->db->order_by('total', 'desc');
			$this->db->limit(5);
			$data = $this->db->get('cthd cthd');
			$data = $data->result_array();
			return $data;	
		}
		public function KHMuaNhieu()
		{
			$this->db->select('kh.makh, kh.tenkh, sum(hd.TongTienTT) as "total"');
			$this->db->join('hoadon hd', 'hd.MaKH = kh.MaKH');
			$this->db->where('hd.TinhTrangTT', 1);
			$this->db->group_by('kh.makh');
			$this->db->order_by('total', 'desc');
			$this->db->limit(3);
			$data = $this->db->get('khachhang kh');
			$data = $data->result_array();
			return $data;	
		}
	}
	
	/* End of file ThongKeModel.php */
	

?>
