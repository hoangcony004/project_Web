<?php

// lay du lieu nhap vao tu o input luu vao bien
if (isset($_POST['btn_doimatkhau'])) {
    $id = $_GET['id'];
    $matkhaucu = $_POST['matkhaucu'];
    $matkhaumoi = $_POST['matkhaumoi'];

    // tao 1 mang luu tru cac loi
    $loi = array();
    if ($matkhaucu == '') {
        $loi['matkhaucu'] = 'Mật khẩu không được để trống!';
    }
    if ($matkhaucu == '') {
        $loi['matkhaumoi'] = 'Mật khẩu không được để trống!';
    }

    if (!$loi) {
        // su dung function da co de su dung 
        $pass = $db->get('khachhang', array('matkhau' => $matkhaucu));
        // var_dump($matkhaucu);
        // die;
        // kiem tra mat khau nhap vao co khop voi mat khau da co trong database khong
        if (empty($pass)) {
            $loi['makhaucu'] = 'Sai mật khẩu!';
        } else {
            $matkhaumoi = md5($matkhaumoi);
            // var_dump($matkhaumoi);
            // die;
            // su dung function da co de su dung 
            $db->update(
                'khachhang',
                array(
                    'matkhau' => $matkhaumoi,

                ),
                array('id' => $id)
            );
            // chuyen huong nguoi dung
            header('location: ?controller=dangxuat');
        }
    }
}
require './view/V_doimatkhau.php';
