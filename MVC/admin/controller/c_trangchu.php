<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id_admin' => $_SESSION['ss_admin']));
}




require './view/V_trangchu.php';
