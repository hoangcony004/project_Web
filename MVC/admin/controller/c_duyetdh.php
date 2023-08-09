<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));
    $data_sanpham = $db->get('order_detail', array());
    $data_dathang = $db->get('oder', array());
    if ($user[0]['level'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'duyet':
                $id = $_GET['id'];
                $oder = $db->get('oder', array('id' => $id));
                $db->update('oder', array('status' => 1), array('id' => $id));
                header('location: ?controller=trangchu');
                //require './view/v_trangchu-admin1.php';
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
