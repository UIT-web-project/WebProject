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
                                <img src="<?php echo base_url() ?>img/user-group.png" class="user-image"
                                    alt="User Image">
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
        <!----------------  Content  ------------->
        <div class="content-wrapper" style="min-height: 639px;">
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>25</h3>
                                <p>Sản phẩm</p>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                            <a href="SanPhamController" class="small-box-footer">Danh sách sản phẩm</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>2</h3>
                                <p>Bài viết</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-chat "></i>
                            </div>
                            <a href="TinTucController" class="small-box-footer">Danh sách bài viết</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>13</h3>
                                <p>Liên hệ</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-email"></i>
                            </div>
                            <a href="KhachHangController" class="small-box-footer">Liên hệ khách hàng</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>33</h3>
                                <p>Giao Hàng</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cube"></i>
                            </div>
                            <a href="GiaoHangController" class="small-box-footer">Tình trạng giao hàng</a>
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
                                <h3 class="fa fa-shopping-basket"> Danh sách đơn đặt hàng</h3>
                                <div class="brcb">
                                    <div class="searchbox">
                                        <input type="text" placeholder="Search here">
                                        <a><i class="fas fa-search-location"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row" style="padding:0px; margin:0px; height: 500px;">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" style="font-size: 0.9em;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 20px;">STT</th>
                                                    <th>Sản phẩm</th>
                                                    <th>Khách Hàng</th>
                                                    <th>Điện thoại</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Ngày đặt</th>
                                                    <th class="text-center" colspan="2">Xử lý đơn</th>
                                                    <th class="text-center" colspan="2">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($arrResult as $item) : ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $item['masp'] ?></td>
                                                    <td><?php echo $item['tensp'] ?></td>
                                                    <td>Nguyễn Văn A</td>
                                                    <td>0332248992</td>
                                                    <td>30,000,000đ</td>
                                                    <td>05-11-2021</td>
                                                    <td style="text-align: center;">
                                                        <a class="btn btn-default btn-xs" href=""
                                                            onclick="return confirm('Xác nhận đơn đặt hàng và chuẩn bị giao hàng ?')"
                                                            role="button">
                                                            <i class="fa fa-check-square"></i> Duyệt đơn
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-xs" href=""
                                                            onclick="return confirm('Xác nhận hủy đơn hàng này ?')">
                                                            <i class="fa fa-trash"></i> Hủy đơn
                                                        </a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-info btn-xs" href="" role="button">
                                                            <span class="glyphicon glyphicon-eye-open"></span>Xem
                                                        </a>
                                                        <a class="btn bg-olive btn-xs" href=""
                                                            onclick="return confirm('Xác nhận lưu đơn hàng này ?')"
                                                            role="button">
                                                            <i class="fa fa-save"></i>Lưu đơn
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            <li class="hidden-xs"><a>Trang đầu</a></li>
                            <li><a>Trước</a></li>
                            <li class="active"><a>1</a></li>
                            <li><a href="">2</a></li>
                            <li><a>...</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">Sau</a></li>
                            <li class="hidden-xs"><a href="">Trang cuối</a></li>
                        </ul>
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