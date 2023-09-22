<?php
// kiem tra xem da dang nhap chua
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // su dung get de lay du lieu tu url 
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        // su dung function da co de su dung 
        $data_khachhang = $db->get_like('khachhang', 'hovaten', $keyword);
    } else {
        // su dung function da co de su dung 
        $data_khachhang = $db->get('khachhang', array());
    }
}else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}

require './view/V_danhsachkhachhang.php';
