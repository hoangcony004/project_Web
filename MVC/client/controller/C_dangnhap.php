<?php

// kiem tra nguoi dung co click vao nut login khong
if (isset($_POST['btn_dangnhap'])) {
    // lay du lieu ve
    $username = $_POST['username'];
    $password = $_POST['password'];

    // tao 1 mang luu tru cac loi
    $loi = array();
    if ($username == '') {
        $loi['username'] = 'Tên đăng nhập không được để trống!';
    }
    if ($password == '') {
        $loi['password'] = 'Mật khẩu không được để trống!';
    }

    if (!$loi) {
        // kiem tra ma hoa mat khau
        $password = md5($password);
        // su dung function da co de su dung 
        $user = $db->get('khachhang', array('tendangnhap' => $username));

        if (empty($user)) {
            $loi['username'] = 'Tên đăng nhập hoặc mật khẩu không tồn tại!';
        }
        // ton tai user name thi kiem tra mat khau
        else {
            if (($password) != $user[0]['matkhau']) {
                $loi['password'] = 'Sai mật khẩu!';
            }
        }
    }
    // neu thoa man taat ca dieu kien ttren (khong con loi nao say ra)
    if (!$loi) {
        // gan id nguoi dung vao session
        $_SESSION['ss_client'] = $user[0]['id'];
        $_SESSION['ss_client1'] = $user[0]['hovaten'];
            // chuyen huong nguoi dung
        header('location: ?controller=trangchu');
    }
    require './view/V_dangnhap_dangky.php';

} else {
    // lay du lieu tu o input nguoi dung nhap
    if (isset($_POST['btn_dangky'])) {
        // lay du lieu ve luu vao bien
        $tendk = $_POST['tendk'];
        $sdtdk = $_POST['sdtdk'];
        $mkdk1 = $_POST['mkdk'];
        $rmkdk = $_POST['rmkdk'];

        // luu tru cac loi
        $loi1 = array();
        if ($tendk == '') {
            $loi['tendk'] = 'Tên đăng ký không được để trống!';
        }
        if ($sdtdk == '') {
            $loi['sdtdk'] = 'Số điện thoại không được để trống!';
        }
        if ($mkdk1 == '') {
            $loi['mkdk1'] = 'Mật khẩu không được để trống!';
        }
        // if ($mkdk >= 8) {
        //     $loi['mkdk'] = 'gjrgyk';
        // }else {
        //     $loi['mkdk'] = 'Mật khẩu phải lớn hơn hoặc bằng 8 ký tự!';
        // }

        if ($rmkdk != $mkdk1) {
            $loi['rmkdk'] = 'Mật khẩu không khớp!';
        }

        // ma hoa mat khau 
        $mkdk = md5($mkdk1);
        if (!$loi) {
            // su dung function da co de su dung 
            $db->insert('khachhang', array(
                'tendangnhap' => $tendk,
                'matkhau' => $mkdk,
                'hovaten' => $sdtdk

            ));
                // chuyen huong nguoi dung
            header('location: ?controller=dangnhap');
        }
    }
    require './view/V_dangnhap_dangky.php';
}
