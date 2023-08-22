<?php


if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // $id = $_GET['id'];
    $data_nhacungcap = $db->get('nhacungcap', array());
}
require './view/V_nhacungcap.php';
