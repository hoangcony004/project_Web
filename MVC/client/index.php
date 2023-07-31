<?php
session_start();
include 'model/m_database.php';
$db = new database();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'trangchu';
}
switch ($controller) {
    case 'dangnhap':
        include 'controller/C_dangnhap.php';
        break;
    case 'trangchu':
        include 'controller/C_trangchu_annhanh.php';
        break;
    case 'dangxuat':
        include 'controller/C_dangxuat.php';
        break;
    case 'cuahang':
        include 'controller/C_cuahang.php';
        break;
    case 'giohang':
        include 'controller/C_giohang.php';
        break;
    case 'thanhtoan':
        include 'controller/C_thanhtoan.php';
        break;
    case 'donhang':
        include 'controller/C_donhang.php';
        break;
    case 'chitietsanpham':
        include 'controller/C_chitietsanpham.php';
        break;
    default:
        break;
}
