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
    <link rel="stylesheet" href="<?php echo base_url() ?>CSS/a.css">
    <meta property="fb:app_id" content="659513967881060">
    <link rel="stylesheet" href="<?php echo base_url() ?>CSS/_all-skins.min.css">
    <script src="<?php echo base_url() ?>js/loader.js"></script>
    <script src="<?php echo base_url() ?>ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#tbl_Kho tr').click(function(e) {
            var tenkho = $(this).closest('.onRow').find('td:nth-child(2)').text();
            var vitri = $(this).closest('.onRow').find('td:nth-child(3)').text();
            $('#tenkhoText').val(tenkho);
            $('#vitrikhoText').val(vitri);
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
        <!----------------  Content Kho  ------------->
        <div class="content-wrapper" style="min-height: 639px;">
            <section class="content-header">
                <h1>
                    <i class="glyphicon glyphicon-hdd"></i>Danh sách kho
                </h1>
                <div class="breadcrumb">
                    <div class="searchbox">
                        <input type="text" placeholder="Search here">
                        <a><i class="fas fa-search-location"></i></a>
                    </div>
                </div>
            </section>
            <form class="content" action="<?=base_url()?>index.php/KhoController/ThemKho" method="post"
                enctype="multipart/form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box" id="view">
                            <div class="box-header with-border">
                                <div class="box-body">
                                    <div class="row" style="padding:0px; margin:0px;">
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-4">
                                                    <label> Tên kho</label>
                                                    <input type="text" name="tenkho" id="tenkhoText" style="width: 80%;"
                                                        placeholder="Tên kho">
                                                </div>
                                                <div class="col-md-5">
                                                    <label> Vị trí</label>
                                                    <input type="text" name="vitri" id="vitrikhoText"
                                                        style="width: 80%;" placeholder="Vị trí">
                                                </div>
                                                <div class="col-md-3">
                                                    <a class="btn btn-primary btn-sm" href="KhoController"
                                                        role="button">
                                                        <span class="glyphicon glyphicon-plus"></span><input
                                                            type="submit" value="Thêm mới">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive" style="margin-top:30px;">
                                            <table class="table table-hover table-bordered" id="tbl_Kho">
                                                <tr>
                                                    <th class="text-center">Mã Kho</th>
                                                    <th>Tên kho</th>
                                                    <th>Vị trí</th>
                                                    <th class="text-center" colspan="2">Thao tác</th>
                                                </tr>
                                                <?php foreach ($arrResult as $item) : ?>
                                                <tr class="onRow" id="XemKho">
                                                    <td class="text-center"><?php echo $item['makho'] ?></td>
                                                    <td id="tenkho1"><?php echo $item['tenkho'] ?></td>
                                                    <td id="vitri1"><?php echo $item['vitri'] ?></td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-success editbtn"
                                                            data-toggle="modal" data-target="#myModal"
                                                            data-id='<?php echo $item['makho']?>' id="kho_popup">
                                                            Sửa
                                                        </button>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="btn btn-danger btn-xs"
                                                            href="<?php echo base_url()?>index.php/KhoController/XoaKho/?makho=<?php echo $item['makho'] ?>"
                                                            onclick="return confirm('Xác nhận xóa kho này ?')"
                                                            role="button">
                                                            <span class="glyphicon glyphicon-trash"></span>Xóa
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach ?>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="pagination">
                                                    <li>1</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Button to Open the Modal -->
            <!-- The Modal -->
            <form class="modal" id="myModal" action="<?=base_url()?>index.php/KhoController/SuaKho" method="post"
                enctype="multipart/form">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa thông tin kho</h4>
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Mã Kho: <input type="text" name="makho_edit" readonly="true" id="makho_edit"
                                style="width: 30px; margin-bottom: 20px;"></br>
                            Tên kho: <input type="text" name="tenkho_edit" style="margin-right: 40px;" id="tenkho_edit">
                            Vị trí: <input type="text" name="vitri_edit" id="vitrikho_edit">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" value="Xác nhận">
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url() ?>js/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url() ?>js/bootstrap.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>js/app.min.js"></script>
    <!-- Thêm xóa sửa Kho -->
    <script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);
            $('#makho_edit').val(data[0]);
            $('#tenkho_edit').val(data[1]);
            $('#vitrikho_edit').val(data[2]);
        });
    })
    </script>
</body>

</html>