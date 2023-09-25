<?php

// lay id tu url ve 
$id = $_GET['id'];
// su dung function da co de su dung 
$chitietdonhang = $db->get('chitietdonhang', array('khachhang_id' => $id));
$donhang = $db->get('donhang', array('khachhang_id' => $id));
$sanpham = $db->get('sanpham', array());


// chuyen huong nguoi dung
require './view/V_donhang.php';
