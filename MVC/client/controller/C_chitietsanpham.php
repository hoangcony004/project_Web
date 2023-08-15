<?php


$id=$_GET['id'];
$sanpham = $db->get('sanpham',array('id'=>$id));
$nguyenlieu = $db->get('nguyenlieu',array('id'=>$id));

$catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['nhacungcap_id']));
require './view/V_chitietsanpham.php';