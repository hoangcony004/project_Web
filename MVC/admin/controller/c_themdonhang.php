<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));
    $data_sanpham = $db->get('order_detail', array());
    $data_dathang = $db->get('oder', array());

    if ($user[0]['level'] == 1) {
        if (isset($_POST['btn_themdh'])) {
            $hoten = $_POST['hoten'];
            $diachi = $_POST['diachi'];
            $sodt = $_POST['sodt'];
            $soluong = $_POST['soluong'];
            $tongtien = $_POST['tongtien'];
            $email = $_POST['email'];

            // khai bao loi
            $loi = array();
            if ($hoten == '') {
                $loi['hoten'] = 'Người đặt hàng không được để trống!';
            }
            if ($diachi == '') {
                $loi['diachi'] = 'Địa chỉ không được để trống!';
            }
            if ($sodt == '') {
                $loi['sodt'] = 'Số điện thoại không được để trống!';
            }
            if ($email == '') {
                $loi['email'] = 'Email không được để trống!';
            }
            if ($soluong == '') {
                $loi['soluong'] = 'Số lượng không được để trống!';
            }
            if ($tongtien == '') {
                $loi['tongtien'] = 'Tổng tiền không được để trống!';
            }
            if (!$loi) {
                $db->insert('oder', array(
                    'full_name' => $hoten,
                    'address' => $diachi,
                    'phone' => $sodt,
                    'amount' => $tongtien,
                    'email' => $email,
                    'status' => 0
                ));
                header('location: ?controller=trangchu');
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=login');
}













require './view/v_trangchu-admin1.php';
