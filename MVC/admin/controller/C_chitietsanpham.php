<?php
if (isset($_SESSION['ss_admin'])) {
    $id=$_GET['id'];
    $sanpham = $db->get('sanpham',array('id'=>$id));
}




require './view/V_chitietsanpham.php';