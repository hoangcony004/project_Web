<?php
$id=$_GET['id'];
$sanpham = $db->get('sanpham',array('id_sanpham'=>$id));
$catalog = $db->get('nhacungcap',array('id_nhacungcap'=>$sanpham[0]['nhacungcap_id']));
require './view/V_chitietsanpham.php';