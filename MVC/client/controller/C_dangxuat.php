<?php
// kiem tra session
if (isset($_SESSION['ss_client'])) {
    // xoa session 
    unset($_SESSION['ss_client']);
}
// kiem tra session 
if (isset($_SESSION['cart'])) {
    // xoa session 
    unset($_SESSION['cart']);
}
// chuyen huong nguoi dung
// header('location: ?controller=dangnhap');
echo "<script>alert('Đăng xuất thành công!')</script>";
echo "<script>window.location.href = '?controller=dangnhap';</script>";
