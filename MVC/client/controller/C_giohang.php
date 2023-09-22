<?php
// su dung function da co de su dung 
$pizza1 = $db->get('sanpham', array('id' => 1));
$pizza2 = $db->get('sanpham', array('id' => 5));
$pizza3 = $db->get('sanpham', array('id' => 6));
$pizza4 = $db->get('sanpham', array('id' => 7));

require './view/V_giohang.php';
