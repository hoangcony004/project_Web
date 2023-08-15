<?php
session_start();
include 'model/m_database.php';
$db = new database();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = 'trangchu';
}
// echo 'controller/C_'. $controller. '.php';
// die;



 include 'controller/C_' . $controller . '.php';

// switch ($controller) {
//     case 'dangnhap':
//         include 'controller/C_dangnhap.php';
//         break;
//     case 'trangchu':
//         include 'controller/C_trangchu.php';
//         break;
//     case 'dangxuat':
//         include 'controller/C_dangxuat.php';
//         break;
//     case 'cuahang':
//         include 'controller/C_cuahang.php';
//         break;
//     case 'giohang':
//         include 'controller/C_giohang.php';
//         break;
//     case 'thanhtoan':
//         include 'controller/C_thanhtoan.php';
//         break;
//     case 'donhang':
//         include 'controller/C_donhang.php';
//         break;
//     case 'chitietsanpham':
//         include 'controller/C_chitietsanpham.php';
//         break;
//     case 'themgiohang':
//         include 'controller/C_themgiohang.php';
//         break;
//     case 'xulygiohang':
//         include 'controller/C_xulygiohang.php';
//         break;
//     case 'xoatatca':
//         include 'controller/C_xoatatca.php';
//         break;
//     case 'thanhtoanthanhcong':
//         include 'controller/C_thanhtoanthanhcong.php';
//         break;
//     case 'trangcanhan':
//         include 'controller/C_trangcanhan.php';
//         break;
//     default:
//         break;
// }
