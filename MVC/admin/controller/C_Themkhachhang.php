<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay du lieu tu o input nguoi dung nhap
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
            $password = md5($password);
            if (!$loi) {
                // su dung function da co de su dung 
                $db->insert('khachhang', array(
                    'tendangnhap' => $username,
                    'matkhau' => $password,
                    'hovaten' => $hoten,
                    'sodienthoai' => $sodt
                ));
                // chuyen huong nguoi dung
                //header('location: ?controller=dangnhap');
                echo "<script>alert('Thêm khách hàng thành công!')</script>";
                echo "<script>window.location.href = '?controller=khachhang';</script>";
            }
        }
    } else {
        // hien thi thong bao
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    // chuyen huong nguoi dung
    //header('location: ?controller=dangnhap');
    echo "<script>alert('Bạn chưa đăng nhập!')</script>";
    echo "<script>window.location.href = '?controller=dangnhap';</script>";
}

require './view/V_themkhachhang.php';
