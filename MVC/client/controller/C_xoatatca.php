<?php
// kiem tra gio hang
if (isset($_SESSION['cart'])) {
    // xoa toan bo gio hang
    unset($_SESSION['cart']);
    // chuyen huong nguoi dung
    // header('location: ?controller=giohang');
        echo "<script>alert('Xóa thành công!')</script>";
        echo "<script>window.location.href = '?controller=giohang';</script>";
}
