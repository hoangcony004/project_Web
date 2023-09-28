<?php

 // kiem tra xem da dang nhap chua
if (isset($_SESSION['ss_admin'])) {
    // su dung function da co de su dung 
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // lay id tu url ve 
    $id = $_GET['id'];
    $data_ctdonhang = $db->get('chitietdonhang', array('donhang_id' => $id));
    $data_donhang = $db->get('donhang', array('id' => $id));
} else {
    // chuyen huong den trang dang nhap
    //header('location: ?controller=dangnhap');
    echo "<script>alert('Bạn chưa đăng nhập!')</script>";
    echo "<script>window.location.href = '?controller=dangnhap';</script>";
}
require './view/V_ctdonhang.php';

