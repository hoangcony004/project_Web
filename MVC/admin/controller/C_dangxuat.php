<?php
// kiem tra session 
if (isset($_SESSION['ss_admin'])) {
    // xoa du lieu trong session 
    unset($_SESSION['ss_admin']);
}
// chuyen huong nguoi dung
    //header('location: ?controller=dangnhap');
    echo "<script>alert('Đăng xuất thành công!')</script>";
    echo "<script>window.location.href = '?controller=dangnhap';</script>";
