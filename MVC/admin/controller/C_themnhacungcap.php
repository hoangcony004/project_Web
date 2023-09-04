<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {

        if (isset($_POST['btn_themnhacungcap'])) {
            $nhacungcap = $_POST['nhacungcap'];

            // khai bao loi
            $loi = array();
            if ($nhacungcap == '') {
                $loi['nhacungcap'] = 'Nhà cung cấp không được để trống!';
            }
            if (!$loi) {
                $db->insert('nhacungcap', array(
                    'tennhacungcap' => $nhacungcap,

                ));
                header('location: ?controller=nhacungcap');
            }
        } else {
            $method = $_GET['method'];
            switch ($method) {
                case 'xoa':
                    $id = $_GET['id'];
                    $db->delete('nhacungcap', array('id' => $id));
                    header('location: ?controller=nhacungcap');
                    break;
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=dangnhap');
}

require './view/V_themnhacungcap.php';
