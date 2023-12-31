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

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Đổi mật khẩu</header>
                <form action="?controller=doimatkhau&id=<?php echo $_SESSION['ss_client'] ?>" method="post">
                    <div class="field input-field">
                        <input type="password" placeholder="Nhập mật khẩu cũ..." class="password" name="matkhaucu">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <?php if (isset($loi['matkhaucu'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['matkhaucu'] ?></p>
                    <?php } ?>
                    <div class="field input-field">
                        <input type="password" placeholder="Nhập mật khẩu mới..." class="password" name="matkhaumoi">
                    </div>
                    <?php if (isset($loi['matkhaumoi'])) { ?>
                        <p class="mt-1" style="color: red;"><?php echo $loi['matkhaumoi'] ?></p>
                    <?php } ?>
                    <div class="form-link">
                        <a style="text-decoration: none;" href="?controller=quenmatkhau" class="forgot-pass">Quên mật khẩu?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit" name="btn_doimatkhau">Đổi mật khẩu</button>
                    </div>
                </form>
            </div>

            <div class="form-link">
                <a href="?controller=trangchu" class="forgot-pass">Quay lại trang chủ</a>
            </div>


        </div>

    </section>

    <!-- JavaScript -->
    <script src="js/script_login.js"></script>
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