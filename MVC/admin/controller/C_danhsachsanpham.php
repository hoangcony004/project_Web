<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $data_sanpham = $db->get_like('sanpham', 'tensanpham', $keyword);
        // header('location: ?controller=danhsachsanpham');
    } else {
        $data_sanpham = $db->get('sanpham', array());
    }
} else {
    // chuyen huong nguoi dung
        //header('location: ?controller=dangnhap');
        echo "<script>alert('Bạn chưa đăng nhập!')</script>";
        echo "<script>window.location.href = '?controller=dangnhap';</script>";
}





require './view/V_danhsachsanpham.php';
