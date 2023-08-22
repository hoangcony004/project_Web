<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $donhang = $db->get('donhang',array());
    $khachhang = $db->get('khachhang',array());

}




require './view/V_trangchu.php';
