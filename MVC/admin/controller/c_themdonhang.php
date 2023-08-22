<?php

if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        if (isset($_POST['btn_themdonhang'])) {
            $hovaten = $_POST['hovaten'];
            $sodt = $_POST['sodt'];
            $tinhthanh = $_POST['tinhthanh'];
            $quanhuyen = $_POST['quanhuyen'];
            $xaphuong = $_POST['xaphuong'];
            $tongtien = $_POST['tongtien'];
            $thonxom = $_POST['thonxom'];
            $trangthai = 0;


            // echo 'skjhshv'.$hovaten;
            // khai bao loi
            $loi = array();
            if ($hovaten == '') {
                $loi['hovaten'] = 'Họ và tên không được để trống!';
            }
            if ($sodt == '') {
                $loi['sodt'] = 'Số điện thoại không được để trống!';
            }
            if ($tinhthanh == '') {
                $loi['tinhthanh'] = 'Tỉnh thành không được để trống!';
            }
            if ($quanhuyen == '') {
                $loi['quanhuyen'] = 'Quận huyện không được để trống!';
            }
            if ($xaphuong == '') {
                $loi['xaphuong'] = 'Xã phường không được để trống!';
            }
            if ($thonxom == '') {
                $loi['thonxom'] = 'Thôn xóm không được để trống!';
            }
            if ($tongtien == '') {
                $loi['tongtien'] = 'Tổng tiền không được để trống!';
            }
            if (!$loi) {
                $db->insert('donhang', array(
                    'hovaten' => $hovaten,
                    'sodienthoai' => $sodt,
                    'tinh_thanh' => $tinhthanh,
                    'quan_huyen' => $quanhuyen,
                    'xa_phuong' => $xaphuong,
                    'thon_xom' => $thonxom,
                    'tongtien' => $tongtien,
                    'trangthai' => 0
                ));
                header('location: ?controller=donhang');
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=dangnhap');
}


require './view/V_themdonhang.php';
