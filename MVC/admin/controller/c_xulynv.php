<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));
    $data_nhanvien = $db->get('admin_nhanvien', array());
    if ($user[0]['level'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'xoa':
                $id = $_GET['id'];
                $db->delete('admin_nhanvien', array('id' => $id));
                header('location: ?controller=dsnhanvien');
                break;
            case 'sua':
                $id = $_GET['id'];
                $data_nhanvien = $db->get('admin_nhanvien', array('id' => $id));
                if (isset($_POST['btn_suanv'])) {
                    $username = $_POST['username'];
                    $full_name = $_POST['full_name'];
                    $level = $_POST['level'];

                    $loi = array();
                    if ($username == '') {
                        $loi['username'] = 'Tên đăng nhập không được để trống!';
                    }
                    if ($full_name == '') {
                        $loi['full_name'] = 'Họ tên không được để trống!';
                    }
                    if ($level == '') {
                        $loi['level'] = 'Cấp không được để trống!';
                    }

                    if (!$loi) {
                        $db->update(
                            'admin_nhanvien',
                            array(
                                'id' => $id,
                                'username' => $username,
                                'full_name' => $full_name,
                                'level' => $level
                            ),
                            array('id' => $id)
                        );
                        header('location: ?controller=dsnhanvien');
                    }
                }
                require './view/v_suanv.php';
                break;
            case 'xoanvsua':
                $id = $_GET['id'];
                $db->delete('admin_nhanvien', array('id' => $id));
                header('location: ?controller=dsnhanvien');
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
