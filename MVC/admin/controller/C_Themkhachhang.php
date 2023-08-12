<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        if (isset($_POST['btn_themkh'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $sodt = $_POST['sodt'];

            // khai bao loi
            $loi = array();
            if ($username == '') {
                $loi['username'] = 'Tên đăng nhập không được để trống!';
            }
            if ($password == '') {
                $loi['password'] = 'Mật khẩu không được để trống!';
            }
            if ($hoten == '') {
                $loi['hoten'] = 'Họ và tên không được để trống!';
            }
            if ($sodt == '') {
                $loi['sodt'] = 'Số điện thoại không được để trống!';
            }
            if (!$loi) {
                $db->insert('khachhang', array(
                    'tendangnhap' => $username,
                    'matkhau' => $password,
                    'hovaten' => $hoten,
                    'sodienthoai' => $sodt
                ));
                header('location: ?controller=khachhang');
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=dangnhap');
}

require './view/V_themkhachhang.php';