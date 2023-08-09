<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));

    $data_nhanvien = $db->get('admin_nhanvien', array());
    $data_sanpham = $db->get('product', array());
} else {
    header('location: ?contrller=login');
}














require './view/v_danhsachnv.php';
