<?php 

	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ThemMoiSPController extends CI_Controller {
	
		public function index()
		{
			$this->load->view('ThemMoiSPView');
			
		}

		// begin: Thêm xóa sửa loại sản phẩm
		public function ThemLoaiSP()
		{
			$data = $this->input->post('data');
			$this->load->model('ThemMoiSPModel');
			$this->ThemMoiSPModel->ThemMoiLoaiSP($data);
			// var_dump($data);
		}
		public function XemLoaiSP()
		{
			$this->load->model('ThemMoiSPModel');
			$data = $this->ThemMoiSPModel->XemLoaiSP();
			// var_dump($data->num_rows());
			$output = '';
			if($data->num_rows() > 0)
			{
				foreach ($data->result() as $row) :
					$output .= '<tr>
									<th class="text-center" style="font-weight: 300;">'.$row->MaLoaiSP.'</th>
									<th style="font-weight: 300;">'.$row->TenLoaiSP.'</th>
									<th class="text-center">
										<div class="btn btn-danger btn-xs"
											id="XoaLoaiSP"
											onclick="XoaLoaiSP('.$row->MaLoaiSP.')"
											role="button">
											<span
												class="glyphicon glyphicon-trash"></span>Xóa
										</div>
									</th>
								</tr>';
				endforeach;
				echo $output;
			}
			else
			{
				echo "Không có dữ liệu";
			}
		}
		public function XoaLoaiSP()
		{
			$maloaisp = $this->input->post('maloaisp');
			$this->load->model('ThemMoiSPModel');
			if($this->ThemMoiSPModel->XoaLoaiSP('loaisp', $maloaisp) == true)
			{
				echo 1;
			}
			else
			{
				echo 0;
			}
			
		}
		// end: Thêm xóa sửa loại sản phẩm
	
		// begin: Thêm xóa sửa thương hiệu
		// thêm thương hiệu
		public function ThemTH()
		{
			$data = $this->input->post('data');
			$this->load->model('ThemMoiSPModel');
			$this->ThemMoiSPModel->ThemMoiTH($data);
		}
		// xem thương hiệu
		public function XemTH()
		{
			$this->load->model('ThemMoiSPModel');
			$data = $this->ThemMoiSPModel->XemTH();
			// var_dump($data->num_rows());
			$output = '';
			if($data->num_rows() > 0)
			{
				foreach ($data->result() as $row) :
					$output .= '<tr>
									<th class="text-center" style="font-weight: 300;">'.$row->MaTH.'</th>
									<th style="font-weight: 300;">'.$row->TenTH.'</th>
									<th class="text-center">
										<div class="btn btn-danger btn-xs"
											id="XoaTH"
											onclick="XoaTH('.$row->MaTH.')"
											role="button">
											<span
												class="glyphicon glyphicon-trash"></span>Xóa
										</div>
									</th>
								</tr>';
				endforeach;
				echo $output;
			}
			else
			{
				echo "Không có dữ liệu";
			}
		}
		//xóa thương hiệu
		public function XoaTH()
		{
			$math = $this->input->post('math');
			$this->load->model('ThemMoiSPModel');
			if($this->ThemMoiSPModel->XoaTH('thuonghieu', $math) == true)
			{	
				echo 1;
			}
			else
			{
				echo 0;
			}
			
		}
		// end: Thêm xóa sửa thương hiệu

		// begin: Thêm sản phẩm
		public function ThemSP()
		{
			$ten = $this->input->post('tensp');
			echo $ten;
		}
	}
	
	/* End of file ThemMoiSPController.php */
	
?>