<?php
$id=$_GET['id'];
$sanpham = $db->get('sanpham',array('id'=>$id));
$catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['id_nhacungcap']));
require './view/V_chitietsanpham.php';