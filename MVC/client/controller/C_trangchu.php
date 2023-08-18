<?php

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    $product = $db->get_like('sanpham', 'tensanpham', $keyword);
    $khachhang = $db->get('khachhang', array());
    $pizza = $db->get('sanpham', array('danhmuc_id' => 1));
    $suonbbq = $db->get('sanpham', array('danhmuc_id' => 2));
    $miy = $db->get('sanpham', array('danhmuc_id' => 3));
    $salad = $db->get('sanpham', array('danhmuc_id' => 4));
    $douong = $db->get('sanpham', array('danhmuc_id' => 5));
    $khac = $db->get('sanpham', array('danhmuc_id' => 6));
} else {
    $product = $db->get('sanpham', array());
    $khachhang = $db->get('khachhang', array());
    $pizza = $db->get('sanpham', array('danhmuc_id' => 1));
    $suonbbq = $db->get('sanpham', array('danhmuc_id' => 2));
    $miy = $db->get('sanpham', array('danhmuc_id' => 3));
    $salad = $db->get('sanpham', array('danhmuc_id' => 4));
    $douong = $db->get('sanpham', array('danhmuc_id' => 5));
    $khac = $db->get('sanpham', array('danhmuc_id' => 6));
}

include 'view/V_trangchu.php';
