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
    if ($matkhaumoi == '') {
        $loi['matkhaumoi'] = 'Mật khẩu không được để trống!';
    }

    if (!$loi) {
        // su dung function da co de su dung 
        $pass = $db->get('khachhang', array('matkhau'));
        // var_dump($pass);
        // die;
        $matkhaucu1 = md5($matkhaucu);
        foreach ($pass as $key => $value) {
            // kiem tra mat khau nhap vao co khop voi mat khau da co trong database khong
            if ($matkhaucu1 == $value['matkhau']) {
                // ma hoa mat khau 
                $matkhaumoi1 = md5($matkhaumoi);
                // su dung function da co de su dung 
                $db->update(
                    'khachhang',
                    array(
                        'matkhau' => $matkhaumoi1,
                    ),
                    array('id' => $id)
                );
                // chuyen huong nguoi dung
                // header('location: ?controller=dangxuat');
                echo "<script>alert('Đổi mật khẩu thành công!')</script>";
                echo "<script>window.location.href = '?controller=dangxuat';</script>";
            } else {
                echo "<script>alert('Sai mật khẩu!')</script>";
                echo "<script>window.location.href = '?controller=doimatkhau&id=$id';</script>";
            }
        }
    }
}

require './view/V_doimatkhau.php';
