<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('khachhang', array('id' => $_SESSION['ss_admin']));
    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
    
        $data_khachhang = $db->get_like('khachhang','hovaten', $keyword);
    } else {
        $data_khachhang = $db->get('khachhang', array());
    }
}






require './view/V_danhsachkhachhang.php';