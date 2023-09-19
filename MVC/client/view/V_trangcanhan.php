<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ăn nhanh 247 - Trang Cá Nhân</title>
    <link rel="shortcut icon" href="img/logo_annhanh.jpg">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li>
                                <!--menu dropdown-->
                                <div class="dropdown">
                                    <?php if (isset($_SESSION['ss_client'])) {
                                    } else {
                                        echo '<a style="text-decoration: none;" href="?controller=dangnhap"><i class="fa fa-user"></i>&ensp;Đăng nhập</a>';
                                    } ?>
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <?php
                                        
                                        if (isset($_SESSION['ss_client'])) {
                                            echo '<a style="text-decoration: none;" href="#">&ensp;' . $_SESSION['ss_client1'];
                                        } 
                                        ?>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu">
                                        <a style="text-decoration: none;" href="?controller=trangcanhan&id=<?php echo $_SESSION['ss_client'] ?>" class="dropdown-item"><i class="fa-regular fa-address-card"></i>&ensp;Trang
                                            cá nhân</a>
                                        <a style="text-decoration: none;" href="?controller=donhang&id=<?php echo $_SESSION['ss_client'] ?>" class="dropdown-item"><i class="fa-solid fa-layer-group"></i>&ensp;Xem
                                            đơn hàng</a>
                                        <a style="text-decoration: none;" href="#" class="dropdown-item"><i class="fa-solid fa-gear"></i>&ensp;Cài
                                            đặt</a>
                                        <a style="text-decoration: none;" href="?controller=dangxuat" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Đăng
                                            xuất</a>
                                    </div>
                                </div>
                            </li>
                            <li><a style="text-decoration: none;" href="#"><i class="fa fa-heart"></i>&ensp;Yêu
                                    thích</a></li>
                            <li><a style="text-decoration: none;" href="?controller=giohang"><i class="fa-sharp fa-solid fa-cart-shopping"></i>&ensp;Giỏ
                                    hàng</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right" style="margin-top: 7px;">
                        <ul class="list-unstyled list-inline">
                            <li>
                                <div><span class="key">Mệnh Giá : </span><span class="value">VND</span></div>
                            </li>-

                            <li class="dropdown dropdown-small">
                                <div><span class="key">Ngôn Ngữ : </span><span class="value">vietnamse</span></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="single-product-area" style="text-align: center;">
        <div class="container">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img style="width: 100px; height: 100px; border-radius: 50%;" src="<?php echo $khachhang[0]['anh'] ?>" alt="Client" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4 style="margin-top: 7px;"><?php echo $khachhang[0]['hovaten'] ?></h4>
                                        <p class="text-secondary mb-1">Khách hàng thân thiết</p>
                                        <p class="text-muted font-size-sm"><?php echo $khachhang[0]['diachi'] ?></p>
                                        <button class="btn btn-primary">Follow</button>
                                        <a href="?controller=doimatkhau&id=<?php echo $_SESSION['ss_client'] ?>" class="btn btn-primary">Đổi mật khẩu</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <a class="btn btn-info" href="?controller=trangchu"><i class="fa-solid fa-house"></i> Trang chủ</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <a class="btn btn-info" href="?controller=donhang&id=<?php echo $_SESSION['ss_client'] ?>"><i class="fa-solid fa-layer-group"></i> Xem đơn hàng</a>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <a class="btn btn-info" href="?controller=dangxuat"><i class="fa-solid fa-right-to-bracket"></i> Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Ảnh: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="file" placeholder="Nhập ảnh..." name="anhprofile" multiple>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Họ tên: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" placeholder="Nhập họ tên..." name="hoten" value="<?php echo $khachhang[0]['hovaten'] ?>">
                                        </div>
                                        <?php if (isset($loi['hoten'])) { ?>
                                            <p class="text-danger"><?php echo $loi['hoten'] ?></p>
                                        <?php } ?>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" placeholder="Nhập email..." name="email" value="<?php echo $khachhang[0]['email'] ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Số điện thoại:
                                            </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" placeholder="Nhập số điện thoại..." name="sodienthoai" value="<?php echo $khachhang[0]['sodienthoai'] ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Giới tính: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <div class="row" data-toggle="buttions">
                                                <div class="col">
                                                    <label class="btn btn-outline-decondary">Nam
                                                        <input type="radio" name="fav_language" value="nam">
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="btn btn-outline-decondary">Nữ
                                                        <input type="radio" name="fav_language" value="nu">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Địa chỉ: </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" placeholder="Nhập địa chỉ(Nhập tỉnh)..." name="diachi" value="<?php echo $khachhang[0]['diachi'] ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary" type="submit" name="btn_capnhat">Cập
                                                nhật</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">Đơn hàng đã mua</h6>
                                <small>Pizza</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Sườn BBQ</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mì Ý</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Salad</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Đồ uống</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <?php
                                foreach ($khachhang as $key => $value) { ?>
                                    <h6 class="d-flex align-items-center mb-3">Thông tin cá nhân</h6>
                                    <small style="margin-right: 200px;">Họ tên: </small>
                                    <div>
                                        <p style="margin-left: 50px;"><?php echo $khachhang[0]['hovaten'] ?></p>
                                    </div>
                                    <small style="margin-right: 200px;">Email: </small>
                                    <div>
                                        <p style="margin-left: 50px;"><?php echo $khachhang[0]['email'] ?></p>
                                    </div>
                                    <small style="margin-right: 200px;">Số điện thoại: </small>
                                    <div>
                                        <p style="margin-left: 50px;"><?php echo $khachhang[0]['sodienthoai'] ?></p>
                                    </div>
                                    <small style="margin-right: 200px;">Giới tính: </small>
                                    <div>
                                        <p style="margin-left: 50px;"><?php echo $khachhang[0]['gioitinh'] ?></p>
                                    </div>
                                    <small style="margin-right: 200px;">Địa chỉ: </small>
                                    <div>
                                        <p style="margin-left: 50px;"><?php echo $khachhang[0]['diachi'] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><img style="width: 70px; border-radius: 50%;" src="img/logo_annhanh.jpg"></h2>
                        <p>
                            Hãy thưởng thức hương vị tuyệt vời của đồ ăn
                            nhanh tại nhà hàng chúng tôi! Với menu đa dạng
                            và phong phú, chúng tôi cam kết mang đến cho bạn
                            những món ngon đầy dinh dưỡng và đáp ứng nhanh
                            chóng nhu cầu của bạn.
                            Chế biến từ nguyên liệu tươi ngon, đội ngũ đầu
                            bếp chuyên nghiệp đã sẵn sàng phục vụ bạn món ăn
                            vừa miệng và sạch sẽ. Hãy ghé thăm nhà hàng của
                            chúng tôi ngay hôm nay để trải nghiệm hương vị
                            độc đáo,
                            dịch vụ tận tâm và không gian thoải mái, thỏa
                            mãn đam mê ẩm thực của bạn.</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/profile.php?id=100020891342691" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Thông tin và chính
                            sách
                        </h2>
                        <ul>
                            <li><a style="text-decoration: none;" href="V_profile.html">Tài khoản của tôi</a></li>
                            <li><a style="text-decoration: none;" href="#">Lịch
                                    sử mua hàng</a></li>
                            <li><a style="text-decoration: none;" href="#">Tra
                                    cứu điểm tiêu dùng</a></li>
                            <li><a style="text-decoration: none;" href="#">Liên
                                    hệ nhà cung cấp</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Dịch vụ và thông
                            tin
                            khác</h2>
                        <ul>
                            <li><a style="text-decoration: none;" href="#">Liên
                                    hệ hợp tác kinh doanh</a></li>
                            <li><a style="text-decoration: none;" href="#">Tuyển
                                    dụng nhân viên</a></li>
                            <li><a style="text-decoration: none;" href="#">Ưu
                                    đãi khi mua hàng</a></li>
                            <li><a style="text-decoration: none;" href="#">Nhận
                                    mã giảm giá</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Bản tin</h2>
                        <p>Đăng ký nhận bản tin và ưu đãi độc quyền của
                            chúng tôi.Bạn sẽ không thấy ở đâu có ưu đãi
                            này
                            nữa!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập email của bạn...">
                                <input type="submit" value="Xác nhận">
                            </form>
                        </div><br>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>Bản quyền của <a style="text-decoration: none;" href="https://www.facebook.com/profile.php?id=100020891342691">hoàng</a>
                            &emsp; &copy; 2023&emsp;Nghiêm
                            cấm sao chép dưới mọi hình thức.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa-brands fa-cc-visa"></i>
                        <i class="fa-brands fa-cc-paypal"></i>
                        <i class="fa-brands fa-cc-mastercard"></i>
                        <i class="fa-solid fa-wallet"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>
</body>

</html>