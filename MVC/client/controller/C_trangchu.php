<?php

if (isset($_GET['timkiem'])) {
    $keyword = $_GET['timkiem'];

    $product = $db->get_like('sanpham', 'tensanpham', $keyword);
    $khachhang = $db->get('khachhang', array());
    $sanpham = $db->get('sanpham', array());
} else {
    $product = $db->get('sanpham', array('danhmuc_id' => 2));
    $khachhang = $db->get('khachhang', array());
    $sanpham = $db->get('sanpham', array());
}

include 'view/V_trangchu.php';
