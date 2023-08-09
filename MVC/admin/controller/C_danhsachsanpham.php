<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id_admin' => $_SESSION['ss_admin']));
    $data_sanpham = $db->get('sanpham', array());
}





require './view/V_danhsachsanpham.php';
