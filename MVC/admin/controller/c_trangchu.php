<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    // su dung function da co de su dung 
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $donhang = $db->get('donhang',array());
    $khachhang = $db->get('khachhang',array());

}else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}
require './view/V_trangchu.php';
