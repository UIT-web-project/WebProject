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
        <!----------------  Content Thống kê  ------------->
        <div class="content-wrapper" style="min-height: 639px;">
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>1</h3>
                                <p>Khách hàng</p>
                                <div class="icon">
                                    <i class="ion ion-cash"></i>
                                </div>
                            </div>
                            <a href="" class="small-box-footer">Thống kê doanh thu</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>2</h3>
                                <p>Sản phẩm</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="" class="small-box-footer">Thống kê số lần bán</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>3</h3>
                                <p>Nhân viên</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="" class="small-box-footer">Thống kê số lần bán</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>4</h3>
                                <p>Nhà cung cấp</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="" class="small-box-footer">Thống kê số lần cung cấp</a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="fa fa-chart-bar"> Bán hàng & Doanh thu</h3>
                                <div class="bread_crumb">
                                    <form>
                                        <label for="chooseyear">Chọn năm thống kê: </label>
                                        <input type="number" id="chooseyear" name="chooseyear" min="2021">
                                        <input class="btn-success" type="submit" value="Xem thống kê">
                                    </form>
                                </div>
                            </div>
                            <div class="box-body">
                                <span>Số lượng bán ra từ 01/2021-12/2021</span>
                                <img src="img/doanhthu.png" alt="" class="pict">
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="description-block border-right">
                                            <span class="description-text">Tổng doanh thu năm 2021</span>
                                            <h5 class="description-header" style="color: #e90000;">0 VNĐ</h5>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 1 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 2 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 3 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 4 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 5 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 6 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 7 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 8 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 9 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 10 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>

                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 11 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <div class="col-sm-4 col-xs-6">
                                    <div class="description-block border-right" style="display: inline-flex;">
                                        <span class="description-text">Doanh thu tháng 12 : </span>
                                        <h5 class="description-header" style="color: #e90000;padding-left: 10px;">0 VNĐ
                                        </h5>
                                        <a class="btn btn-info btn-xs" href="" role="button"
                                            style="margin-left: 5px; height: 20px;">
                                            <span class="glyphicon glyphicon-eye-open"></span>Xem chi tiết
                                        </a>
                                    </div>
                                    <!-- /.description-block -->
                                </div> <!-- /.row -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() ?>js/bootstrap.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>js/app.min.js"></script>
</body>

</html>