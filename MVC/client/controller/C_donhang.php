<?php




$id=$_GET['id'];
$donhang = $db->get('donhang',array('khachhang_id'=>$id));
$sanpham = $db->get('sanpham',array());

// $catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['id_nhacungcap']));


require './view/V_donhang.php';
