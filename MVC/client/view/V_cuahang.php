<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ăn nhanh 247 - Cửa Hàng</title>
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
    <style>
        .float-contact {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 99999;
        }


        .chat-facebook,
        .call-hotline {
            display: block;
            margin-bottom: 6px;
            line-height: 0;
        }

        @media (max-width: 480px) {


            .chat-facebook,
            .call-hotline {
                display: inline-block;
            }
        }
    </style>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <div class="header-right">
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

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="?controller=trangchu"><img style="width: 70px; border-radius: 50%;" src="img/logo_annhanh.jpg"></a></h1>
                    </div>
                </div>
                <?php if (isset($_SESSION['cart'])) {
                    $tongtien = 0;
                    foreach ($_SESSION['cart'] as $key => $value) {
                        $tongtien += $value['soluong'] * $value['giamoi'];
                        $sp = $_SESSION['cart'];
                        $sl = count($sp);
                    }
                } else {
                    $sl = 0;
                    $tongtien = 0;
                } ?>
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="?controller=giohang">Giỏ hàng <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo  $sl ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="?controller=trangchu">Trang chủ</a></li>
                        <li class="active"><a href="?controller=cuahang">Cửa hàng</a></li>
                        <li><a href="?controller=giohang"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                Giỏ hàng</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100020891342691">Liên
                                hệ</a></li>
                        <li>
                            <form action="#" method="get">
                                <input type="search" placeholder="Tìm kiếm..." name="timkiem" style=" border: 1px solid; border-radius: 5px; margin-top: 20px;" value="<?php echo (isset($_GET['timkiem'])) ? $_GET['timkiem'] : '' ?>">
                                <button style="padding: 2px 15px; border: 1px solid; border-radius: 5px; background-color: cornflowerblue;
                                "><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Cửa Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div role="tabpanel">
            <ul class="product-tab" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pizza</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sườn BBQ</a></li>
                <li role="presentation"><a href="#ttchitiet" aria-controls="ttchitiet" role="tab" data-toggle="tab">Mì Ý</a></li>
                <li role="presentation"><a href="#danhgia" aria-controls="ttchitiet" role="tab" data-toggle="tab">Salad</a></li>
                <li role="presentation"><a href="#dagiao" aria-controls="ttchitiet" role="tab" data-toggle="tab">Đồ uống</a></li>
                <li role="presentation"><a href="#khac" aria-controls="ttchitiet" role="tab" data-toggle="tab">Tất cả sản phẩm</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($pizza as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($suonbbq as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                <div role="tabpanel" class="tab-pane fade" id="ttchitiet">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($miy as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                <div role="tabpanel" class="tab-pane fade" id="danhgia">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($salad as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                <div role="tabpanel" class="tab-pane fade" id="dagiao">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($douong as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                <div role="tabpanel" class="tab-pane fade" id="khac">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest-product">
                                    <div class="single-product-area">
                                        <div class="zigzag-bottom"></div>
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                foreach ($khac as $key => $value) { ?>
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product">
                                                            <div class="product-upper">
                                                                <img style="width: 220px; height: 130px;" src="<?php echo $value['anhsanpham']; ?>" alt>
                                                            </div>
                                                            <h2><a style="text-decoration: none;" href="?controller=chitietsanpham&id=<?php echo $value['id'] ?>"><?php echo $value['tensanpham']; ?></a></h2>
                                                            <div class="product-carousel-price">
                                                                <ins><?php echo number_format($value['giamoi']) ?>vnd</ins> <del><?php echo number_format($value['giacu']) ?>vnd</del>
                                                            </div>

                                                            <div class="product-option-shop">
                                                                <a class="add_to_cart_button" data-quantity="1" data-product_sku data-product_id="70" rel="nofollow" href="?controller=themgiohang&id=<?php echo $value['id'] ?>"><i class="fa-sharp fa-solid fa-cart-shopping"></i>
                                                                    Thêm giỏ hàng</a>
                                                            </div>
                                                        </div>
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
                            Hãy thưởng thức hương vị tuyệt vời của đồ ăn nhanh tại nhà hàng chúng tôi! Với menu đa dạng và phong phú, chúng tôi cam kết mang đến cho bạn những món ngon đầy dinh dưỡng và đáp ứng nhanh chóng nhu cầu của bạn.
                            Chế biến từ nguyên liệu tươi ngon, đội ngũ đầu bếp chuyên nghiệp đã sẵn sàng phục vụ bạn món ăn vừa miệng và sạch sẽ. Hãy ghé thăm nhà hàng của chúng tôi ngay hôm nay để trải nghiệm hương vị độc đáo,
                            dịch vụ tận tâm và không gian thoải mái, thỏa mãn đam mê ẩm thực của bạn.</p>
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
                            <li><a style="text-decoration: none;" href="#">Lịch sử mua hàng</a></li>
                            <li><a style="text-decoration: none;" href="#">Tra cứu điểm tiêu dùng</a></li>
                            <li><a style="text-decoration: none;" href="#">Liên hệ nhà cung cấp</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Dịch vụ và thông
                            tin
                            khác</h2>
                        <ul>
                            <li><a style="text-decoration: none;" href="#">Liên hệ hợp tác kinh doanh</a></li>
                            <li><a style="text-decoration: none;" href="#">Tuyển dụng nhân viên</a></li>
                            <li><a style="text-decoration: none;" href="#">Ưu đãi khi mua hàng</a></li>
                            <li><a style="text-decoration: none;" href="#">Nhận mã giảm giá</a></li>
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
    <div class="float-contact">
        <div class="call-hotline">
            <a href="tel:0388937608"><i style="font-size: 48px; color: greenyellow;" class="fa-solid fa-phone"></i></a>
        </div><br>
        <div class="chat-facebook">
            <a href="https:m.me/100020891342691" target="_blank"><i style="font-size: 48px; color: blue;" class="fa-brands fa-facebook-messenger"></i></a>
        </div>
    </div>
</body>

</html>