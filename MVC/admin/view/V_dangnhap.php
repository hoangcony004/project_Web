<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- App css -->
    <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                            <a href="index.html">
                                <span><img style="width: 70px; height: 70px; border-radius: 50%;" src="images/logo_annhanh.jpg" alt=""></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h2 class="text-dark-50 text-center pb-0 fw-bold">Đăng nhập</h2>
                                <p class="text-muted mb-4">Đăng nhập bằng tài khoản được cung cấp.</p>
                            </div>

                            <form action="#" method="post">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Tên đăng nhập: </label>
                                    <input class="form-control" type="text" placeholder="Nhập tên đăng nhập..." name="username" value="<?php echo (isset($username)) ? $username : '' ?>">
                                </div>
                                <?php if (isset($loi['username'])) { ?>
                                    <p class="mt-1" style="color: red;"><?php echo $loi['username'] ?></p>
                                <?php } ?>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu: </label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control" placeholder="Nhập mật khẩu..." name="password" value="<?php echo (isset($password)) ? $password : '' ?>">

                                    </div>
                                    <?php if (isset($loi['password'])) { ?>
                                        <p class="mt-1" style="color: red;"><?php echo $loi['password'] ?></p>
                                    <?php } ?>
                                </div>

                                <div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Ghi nhớ tôi</label>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit" name="btn_dangnhap"> Đăng nhập </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2020 - 2024 © Hyper - Coderthemes.com
    </footer>

    <!-- bundle -->
    <script src="js/vendor.min.js"></script>
    <script src="js/app.min.js"></script>

</body>

</html>