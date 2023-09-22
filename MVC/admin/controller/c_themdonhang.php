<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay du lieu tu o input nguoi dung nhap
        if (isset($_POST['btn_themdonhang'])) {
            $hovaten = $_POST['hovaten'];
            $sodt = $_POST['sodt'];
            $tinhthanh = $_POST['tinhthanh'];
            $diachichitiet = $_POST['diachichitiet'];
            $tongtien = $_POST['tongtien'];
            $trangthai = 0;


            // tao bien khai bao loi
            $loi = array();
            if ($hovaten == '') {
                $loi['hovaten'] = 'Họ và tên không được để trống!';
            }
            if ($sodt == '') {
                $loi['sodt'] = 'Số điện thoại không được để trống!';
            }

            if ($tongtien == '') {
                $loi['tongtien'] = 'Tổng tiền không được để trống!';
            }
            if (!$loi) {
                // su dung function da co de su dung 
                $db->insert('donhang', array(
                    'hovaten' => $hovaten,
                    'sodienthoai' => $sodt,
                    'tinh_thanh' => $tinhthanh,
                    'diachichitiet' => $diachichitiet,
                    'tongtien' => $tongtien,
                    'trangthai' => 0
                ));
                // chuyen huong nguoi dung
                header('location: ?controller=donhang');
            }
        }
    } else {
        // hien thi thong bao 
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}


require './view/V_themdonhang.php';
