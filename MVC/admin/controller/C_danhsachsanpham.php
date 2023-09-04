<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        $data_sanpham = $db->get_like('sanpham', 'tensanpham', $keyword);
        //header('location: ?controller=danhsachsanpham');
    } else {
        $data_sanpham = $db->get('sanpham', array());
    }
}





require './view/V_danhsachsanpham.php';
