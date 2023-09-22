<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ăn nhanh 247 - Đăng Nhập & Đăng ký</title>
    <link rel="shortcut icon" href="img/logo_annhanh.jpg">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style_login.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Đăng nhập</header>
                <form action="#" method="post">
                    <div class="field input-field">
                        <input type="text" placeholder="Tên đăng nhập..." class="input" name="username" value="<?php echo (isset($username)) ? $username : '' ?>">
                    </div>
                    <?php if (isset($loi['username'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['username'] ?></p>
                    <?php } ?>
                    <div class="field input-field">
                        <input type="password" placeholder="Nhập mật khẩu..." class="password" name="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <?php if (isset($loi['password'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['password'] ?></p>
                    <?php } ?>
                    <div class="form-link">
                        <a style="text-decoration: none;" href="?controller=quenmatkhau" class="forgot-pass">Quên mật khẩu?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="btn_dangnhap">Đăng nhập</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Bạn chưa có tài khoản? <a style="text-decoration: none;" href="#" class="link signup-link">Đăng ký</a></span>
                </div>
            </div>

            <div class="form-link">
                <a href="?controller=trangchu" class="forgot-pass">Quay lại trang chủ</a>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Đăng nhập bằng Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="img/google.png" alt="" class="google-img">
                    <span>Đăng nhập bằng Google</span>
                </a>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Đăng ký</header>
                <form action="?controller=dangnhap" method="post">
                    <div class="field input-field">
                        <input type="text" placeholder="Tên đăng nhập..." class="input" name="tendk" value="<?php echo (isset($tendk)) ? $tendk : '' ?>">
                    </div>
                    <?php if (isset($loi['tendk'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['tendk'] ?></p>
                    <?php } ?>
                    <div class="field input-field">
                        <input type="text" placeholder="Họ và tên..." class="input" name="sdtdk" value="<?php echo (isset($sdtdk)) ? $sdtdk : '' ?>">
                    </div>
                    <?php if (isset($loi['sdtdk'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['sdtdk'] ?></p>
                    <?php } ?>
                    <div class="field input-field">
                        <input type="password" placeholder="Nhập mật khẩu..." class="password" name="mkdk" value="<?php echo (isset($mkdk1)) ? $mkdk1 : '' ?>">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <?php if (isset($loi['mkdk1'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['mkdk1'] ?></p>
                    <?php } ?>
                    <div class="field input-field">
                        <input type="password" placeholder="Nhập lại mật khẩu..." class="password" name="rmkdk">
                    </div>
                    <?php if (isset($loi['rmkdk'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['rmkdk'] ?></p>
                    <?php } ?>
                    <div class="field button-field">
                        <button type="submit" name="btn_dangky">Đăng ký</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Bạn đã có tài khoản? <a style="text-decoration: none;" href="#" class="link login-link">Đăng nhập</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Đăng nhập bằng Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="img/google.png" alt="" class="google-img">
                    <span>Đăng nhập bằng Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- JavaScript -->
    <script src="js/script_login.js"></script>
</body>

</html>