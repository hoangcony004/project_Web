<?php

 
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $id = $_GET['id'];
    $data_ctdonhang = $db->get('chitietdonhang', array('donhang_id' => $id));
}
require './view/V_ctdonhang.php';