<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));

    $id = $_GET['id'];
    $data_order = $db->get('oder', array('id' => $id));
    $data_order_detail = $db->get('order_detail', array('order_id' => $id));
} else {
    header('location: ?controller=login');
}
require 'view/v_chitiet_dh.php';
