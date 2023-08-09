<?php
    $magiamgia='fload';
if (isset($_POST['btn_magiamgia'])) {
    $magiamgia = $_POST['magiamgia'];
}
//echo 'ma la'.$magiamgia;
// $tongtien = 0;
// if (isset($_SESSION['cart'])) {
//     foreach ($_SESSION['cart'] as $key => $value) {
//         $tongtien += $value['soluong'] * $value['giamoi'];
//     }
// }
//     $tiensaugg = $tongtien-$magiamgia;



    require './view/V_giohang.php';
