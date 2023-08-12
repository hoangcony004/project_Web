<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));


    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'xoakh':
                $id = $_GET['id'];
                $db->delete('khachhang', array('id' => $id));
                header('location: ?controller=khachhang');
                break;
            case 'suakh':
                $id = $_GET['id'];
                $data_khachhang = $db->get('khachhang', array('id' => $id));
                if (isset($_POST['btn_suakh'])) {
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
                        $db->update('khachhang', array(
                            'tendangnhap' => $username,
                            'matkhau' => $password,
                            'hovaten' => $hoten,
                            'sodienthoai' => $sodt
                        ),array('id' => $id)
                        );
                        header('location: ?controller=khachhang');
                    }
                }
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
require './view/V_xulykhachhang.php';