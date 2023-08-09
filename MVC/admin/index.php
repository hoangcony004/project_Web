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
    default:
        break;
}
