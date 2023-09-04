<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ăn nhanh 247 - Đăng Nhập & Đăng ký</title>

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
</body>

</html>