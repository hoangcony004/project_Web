<?php


$pizza = $db->get('sanpham', array('danhmuc_id'=>1));
$suonbbq = $db->get('sanpham', array('danhmuc_id'=>2));
$miy = $db->get('sanpham', array('danhmuc_id'=>3));
$salad = $db->get('sanpham', array('danhmuc_id'=>4));
$douong = $db->get('sanpham', array('danhmuc_id'=>5));
$khac = $db->get('sanpham', array());

require './view/V_cuahang.php';