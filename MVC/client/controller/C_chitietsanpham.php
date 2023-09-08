<?php


$id=$_GET['id'];
$sanpham = $db->get('sanpham',array('id'=>$id));
$nguyenlieu = $db->get('nguyenlieu',array('id'=>$id));
$pizza = $db->get('sanpham', array('danhmuc_id' => 1));
$suonbbq = $db->get('sanpham', array('danhmuc_id' => 2));
$miy = $db->get('sanpham', array('danhmuc_id' => 3));
$salad = $db->get('sanpham', array('danhmuc_id' => 4));
$douong = $db->get('sanpham', array('danhmuc_id' => 5));
$khac = $db->get('sanpham', array('danhmuc_id' => 6));
$binhluan_danhgia = $db->get('binhluan_danhgia', array('sanpham_id' => $id));

$catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['nhacungcap_id']));
require './view/V_chitietsanpham.php';