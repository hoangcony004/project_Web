<?php
 // kiem tra xem da dang nhap chua
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // lay id tu url ve 
    $id=$_GET['id'];
    $sanpham = $db->get('sanpham',array('id'=>$id));
        $data_sanpham = $db->get('sanpham', array());
} else {
    // chuyen huong den trang dang nhap
    //header('location: ?controller=dangnhap');
    echo "<script>alert('Bạn chưa đăng nhập!')</script>";
    echo "<script>window.location.href = '?controller=dangnhap';</script>";
}




require './view/V_chitietsanpham.php';