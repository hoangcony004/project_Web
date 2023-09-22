<?php

// lay id tu url ve 
$id=$_GET['id'];
// su dung function da co de su dung 
$sanpham = $db->get('sanpham',array('id'=>$id));
$pizza = $db->get('sanpham', array('danhmuc_id' => 1));
$suonbbq = $db->get('sanpham', array('danhmuc_id' => 2));
$miy = $db->get('sanpham', array('danhmuc_id' => 3));
$salad = $db->get('sanpham', array('danhmuc_id' => 4));
$douong = $db->get('sanpham', array('danhmuc_id' => 5));
$khac = $db->get('sanpham', array('danhmuc_id' => 6));
$binhluan_danhgia = $db->get('binhluan_danhgia', array('sanpham_id' => $id));
$catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['nhacungcap_id']));
// chuyen huong nguoi dung
require './view/V_chitietsanpham.php';