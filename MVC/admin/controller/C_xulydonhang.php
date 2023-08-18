<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'duyet':
                $id = $_GET['id'];
                $oder = $db->get('donhang', array('id' => $id));
                $db->update('donhang', array('trangthai' => 1), array('id' => $id));
                header('location: ?controller=donhang');
                //require './view/v_trangchu-admin1.php';
                break;
                case 'xoa':
                    $id = $_GET['id'];
                    $db->delete('donhang', array('id' => $id));
                    header('location: ?controller=donhang');
                    break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
