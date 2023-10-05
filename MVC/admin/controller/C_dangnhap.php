<?php
// kiem tra nguoi dung da dan nhap chua
if (isset($_SESSION['ss_admin'])) {
    // neu da dang nhap thi chuyen nguoi dung den trang chu
    header('location: ?controller=trangchu');
}
// kiem tra nguoi dung co click vao nut login khong
// lay du lieu tu o input nguoi dung nhap vao
if (isset($_POST['btn_dangnhap'])) {
    // lay du lieu ve luu vao bien 
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
        $user = $db->get('admin', array('tendangnhap' => $username));
        // kiem tra user nhap vao co khop voi database khong 
        if (empty($user)) {
            // luu loi vao bien 
            $loi['username'] = 'Tên đăng nhập hoặc mật khẩu không tồn tại!';
        }
        // ton tai user name thi kiem tra mat khau
        else {
            if ($password != $user[0]['matkhau']) {
                $loi['password'] = 'Sai mật khẩu!';
            }
        }
    }
    // neu thoa man tat ca dieu kien tren (khong con loi nao say ra)
    if (!$loi) {
        // gan id nguoi dung vao session
        $_SESSION['ss_admin'] = $user[0]['id'];
        // khi da xong chuyen huong nguoi dung
        header('location: ?controller=dangnhap');
        // echo "<script>alert('Đăng nhập thành công!')</script>";
        // echo "<script>window.location.href = '?controller=dangnhap';</script>";
    }
}

require './view/V_dangnhap.php';
