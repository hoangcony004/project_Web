<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $data_donhang = $db->get('donhang', array());
}



require './view/V_donhang.php';