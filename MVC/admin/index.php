<?php
session_start();
include 'model/m_database.php';
$db = new database();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'dangnhap';
}
switch ($controller) {
    case 'dangnhap':
        include 'controller/C_dangnhap.php';
        break;
    case 'dangxuat':
        include 'controller/C_dangxuat.php';
        break;
    case 'trangchu':
        include 'controller/C_trangchu.php';
        break;
    case 'danhsachsanpham':
        include 'controller/C_danhsachsanpham.php';
        break;
    case 'themsanpham':
        include 'controller/C_themsanpham.php';
        break;
    case 'xulysanpham':
        include 'controller/C_xulysanpham.php';
        break;
    case 'chitietsanpham':
        include 'controller/C_chitietsanpham.php';
        break;
    case 'khachhang':
        include 'controller/C_danhsachkhachhang.php';
        break;
    case 'themkhachhang':
        include 'controller/C_Themkhachhang.php';
        break;
    case 'xulykhachhang':
        include 'controller/C_xulykhachhang.php';
        break;
    case 'themdonhang':
        include 'controller/C_themdonhang.php';
        break;
    default:
        break;
}
