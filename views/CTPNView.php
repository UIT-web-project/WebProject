<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quản trị hệ thống</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>img/iconu.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>CSS/AdminLTE.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>CSS/admin.css">
    <meta property="fb:app_id" content="659513967881060">
    <link rel="stylesheet" href="<?php echo base_url() ?>CSS/_all-skins.min.css">
    <script src="<?php echo base_url() ?>js/loader.js"></script>
    <script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#tbl_ctpn tr').click(function(e) {
            var masp = $(this).closest('.onRow').find('td:nth-child(2)').text();
            var gianhap = $(this).closest('.onRow').find('td:nth-child(4)').text();
            var sl = $(this).closest('.onRow').find('td:nth-child(5)').text();
            $('#spSL').val(masp);
            $('#gnIP').val(gianhap);
            $('#slIP').val(sl);
        });
    });
    </script>
</head>

<body class="skin-blue sidebar-mini">
    <script type="text/javascript" src="https://www.gstatic.com/charts/45/loader.js"></script>
    <div class="wrapper">
        <header class="main-header">
            <a href="adminController" class="logo">
                <span class="logo-lg">Quản trị hệ thống</span>
            </a>
            <nav class="navbar navbar-static-top" style="height: 50px">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="ic fa fa-bars"></i>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav" style="height: 52px; padding: 1px">
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">17</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="adminController">
                                                <i class="fa fa-users text-aqua"></i>
                                                11 Đơn hàng chưa duyệt
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="menu">
                                        <li>
                                            <a href="GiaoHangController">
                                                <i class="fa fa-users text-aqua"></i>
                                                6 Đơn hàng đang giao
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li style="height: 52px">
                            <a target="_blank" href="index.html">
                                <i class="fa fa-house-user"></i>
                                <span>Website</span>
                            </a>
                        </li>
                        <li class="dropdown user user-menu" style="height: 52px; padding: 0px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/user-group.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">ADMIN</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="img/user-group.png" class="img-circle" alt="User Image">
                                    <p>ADMIN<small>0167892615</small></p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="SuaNVController" class="btn btn-default btn-flat">Chi tiết</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="admin/user/logout.html" class="btn btn-default btn-flat">Thoát</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="treeview">
                        <a href="ThongKeController">
                            <i class="fa fa-chart-bar"></i>
                            <span>Thống kê</span>
                        </a>
                    </li>
                    <li class="header">QUẢN LÝ CỬA HÀNG</li>
                    <li class="treeview">
                        <a href="TinTucController">
                            <i class="glyphicon glyphicon-list"></i><span>Tin tức</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="SanPhamController">
                            <i class="fa fa-archive"></i><span>Sản phẩm</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="KhoController">
                            <i class="fa fa-store"></i><span>Kho</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="NhaCungCapController">
                            <i class="fa fa-handshake"></i><span>Nhà cung cấp</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="NhapHangController">
                            <i class="fa fa-shopping-cart"></i><span>Nhập hàng</span>
                        </a>
                    </li>
                    <li class="header">QUẢN LÝ BÁN HÀNG</li>
                    <li class="treeview">
                        <a href="KhuyenMaiController">
                            <i class="fa fa-newspaper"></i> <span>Khuyến mãi</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="HoTroController">
                            <i class="fa fa-envelope"></i> <span>Hổ trợ</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="HoaDonController">
                            <i class="fa fa-calendar-check"></i> <span>Hóa đơn</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="GiaoHangController">
                            <i class="fas fa-shipping-fast"></i> <span>Giao hàng</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="KhachHangController">
                            <i class="fa fa-user"></i><span>Khách hàng</span>
                        </a>
                    </li>
                    </li>
                    <li class="header">CÀI ĐẶT</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-cog"></i><span>Hệ thống</span>
                            <span class="pull-right-container">
                                <i class="fa fa-sort pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="CauHinhController">
                                    <i class="fa fa-cogs"></i> Cấu hình
                                </a>
                            </li>
                            <li>
                                <a href="NhanVienController">
                                    <i class="fa fa-users"></i> Nhân viên
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="admin/user/logout.html"><i class="fa fa-sign-out-alt text-red"></i>
                            <span>Thoát</span></a></li>
                </ul>
            </section>
        </aside>
        <!----------------  Content Chi tiết phiếu nhập  ------------->
        <div class="content-wrapper" style="min-height: 639px;">
            <section class="content-header">
                <h1><i class="glyphicon glyphicon-ok-sign"></i> Chi tiết phiếu nhập</h1>
                <div class="breadcrumb">
                    <a class="btn btn-primary btn-sm" href="NhapHangController" role="button">
                        <span class="glyphicon glyphicon-floppy-save"></span>Lưu
                    </a>
                    <a class="btn btn-primary btn-sm" href="NhapHangController" role="button">
                        <span class="glyphicon glyphicon-remove do_nos"></span> Thoát
                    </a>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" id="view">
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="col-md-6" style="padding-left: 0px;">
                                        <div class="form-group">
                                            <label>Nhà cung cấp</label>
                                            <select name="NCC_PN_IP" class="form-group" style="width:100%">
                                                <option value>[--Chọn nhà cung cấp--]</option>
                                                <option value="1" selected>1-Apple</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;">
                                        <div class="form-group">
                                            <label>Tình trạng thanh toán</label>
                                            <select class="form-control" name="TTTT_PN_IP">
                                                <option value="0">0.Chưa thanh toán</option>
                                                <option value="1" selected>1.Đã thanh toán</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6" style="padding-left: 0px;">
                                        <div class="form-group">
                                            <label>Thành tiền</label>
                                            <input type="number" class="form-control" name="ThanhTien_PN_IP" min="0"
                                                step="5000" style="width:100%" value="500000000">
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 0px;">
                                        <div class="form-group">
                                            <label>Nhân viên</label>
                                            <select name="NV_PN_IP" class="form-group" style="width:100%">
                                                <option value>[----Chọn nhân viên----]</option>
                                                <option value="1" selected>1-Nguyễn Văn B</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <span style="font-size: 16px; font-weight: 700;">Chi tiết phiếu nhập</span>
                        <div class="box" id="view">
                            <div class="box-body">
                                <div class="col-md-6" style="border-right:ridge">
                                    <div class="form-group">
                                        <label>Sản phẩm</label>
                                        <select name="SP_CTPN_IP" class="form-group" style="width:100%" id="spSL">
                                            <option value>[----Chọn sản phẩm----]</option>
                                            <option value="1">1-Iphone 13 Pro Max</option>
                                            <option value="2">2-Iphone 12 Pro Max</option>
                                        </select>
                                        <label>Giá nhập</label>
                                        <input type="number" class="form-control" id="gnIP" name="GiaNhap_CTPN_IP"
                                            min="0" step="5000" style="width:100%" value="0">
                                        <label>Số lượng</label>
                                        <input type="number" class="form-control" id="slIP" name="SL_CTPN_IP" min="0"
                                            step="1" style="width:100%; margin-bottom: 10;" value="0">
                                        <a class="btn btn-primary btn-sm" role="button">
                                            <span class="glyphicon glyphicon-plus"></span>Thêm
                                        </a>
                                        <a class="btn btn-success btn-xs" role="button">
                                            <span class="glyphicon glyphicon-edit"></span>Cập nhật
                                        </a>
                                        <a style="padding:5px" class="btn btn-danger btn-xs"
                                            onclick="return confirm('Xác nhận xóa?')" role="button">
                                            <span class="glyphicon glyphicon-trash"></span>Xóa
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row" style="padding:0px; margin:0px;">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered" id="tbl_ctpn">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Mã PN</th>
                                                        <th class="text-center">Mã SP</th>
                                                        <th>Tên sản phẩm</th>
                                                        <th class="text-center">Giá nhập</th>
                                                        <th class="text-center">Số lượng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="onRow">
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">1</td>
                                                        <td>Iphone 13 Pro Max</td>
                                                        <td class="text-center">25000000</td>
                                                        <td class="text-center">20</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </form>
        </div>
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() ?>js/bootstrap.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>js/app.min.js"></script>
</body>

</html>l>