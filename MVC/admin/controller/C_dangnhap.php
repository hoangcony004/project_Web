<?php
// kiem tra nguoi dung da dan nhap chua
if (isset($_SESSION['ss_admin'])) {
    // neu da dang nhap thi chuyen nguoi dung den trang quan tri
    header('location: ?controller=trangchu');
}
// kiem tra nguoi dung cos click vao nut lodin khoong
if (isset($_POST['btn_dangnhap'])) {
    // lay du lieu ve
    $username = $_POST['username'];
    $password = $_POST['password'];
    // kiem tra tai khoan
    // b1 tao 1 mang luu tru cac loi
    $loi = array();
    if ($username == '') {
        $loi['username'] = 'Tên đăng nhập không được để trống!';
    }
    if ($password == '') {
        $loi['password'] = 'Mật khẩu không được để trống!';
    }

    if (!$loi) {
        $user = $db->get('admin', array('tendangnhap' => $username));
        if (empty($user)) {
            $loi['username'] = 'Tên đăng nhập không tồn tại!';
        }
        // neu ton tai user name thif kiem tra mat khau
        else {
            if ($password != $user[0]['matkhau']) {
                $loi['password'] = 'Sai mật khẩu!';
            }
        }
    }
    // neu thoa man taat ca dieu kien ttren (khong con loi nao say ra)
    if (!$loi) {
        // gan id nguoi dung vao session
        $_SESSION['ss_admin'] = $user[0]['id'];
        header('location: ?controller=trangchu');
    }
}

require './view/V_dangnhap.php';
