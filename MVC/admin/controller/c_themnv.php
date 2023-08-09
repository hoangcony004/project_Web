<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['level'] == 1) {
        if (isset($_POST['btn_capnhat'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $full_name = $_POST['full_name'];

            // khai bao loi
            $loi = array();
            if ($username == '') {
                $loi['username'] = 'Tên đăng nhập không được để trống!';
            }
            if ($password == '') {
                $loi['password'] = 'Mật khẩu không được để trống!';
            }
            if ($full_name == '') {
                $loi['full_name'] = 'Họ tên không được để trống!';
            }
            if (!$loi) {
                $db->insert('admin_nhanvien', array(
                    'username' => $username,
                    'password' => $password,
                    'full_name' => $full_name,
                    'level' => 2
                ));
                header('location: ?controller=dsnhanvien');
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=login');
}

require './view/v_danhsachnv.php';
