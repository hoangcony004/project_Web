<?php
if (isset($_SESSION['ss_admin'])) {
    // su dung function da co de su dung 
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $data_donhang = $db->get('oder', array());
    $data_dathang = $db->get('oder', array());
    $data_sanpham = $db->get('order_detail', array());


    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay method tu url 
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                // lay id tu url ve 
                $id = $_GET['id'];
                $data_donhangg = $db->get('oder', array('id' => $id));
                // lay du lieu tu o input nguoi dung nhap
                if (isset($_POST['btn_suadh'])) {
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sodt = $_POST['sodt'];
                    $giatien = $_POST['giatien'];
                    $email = $_POST['email'];
                    $tongtien = $_POST['tongtien'];
                    // khai bao cac loi
                    $loi = array();
                    if ($hoten == '') {
                        $loi['hoten'] = 'Họ tên không được để trống!';
                    }
                    if ($diachi == '') {
                        $loi['diachi'] = 'Địa chỉ không được để trống!';
                    }
                    if ($sodt == '') {
                        $loi['sodt'] = 'Số điện thoại không được để trống!';
                    }
                    if ($giatien == '') {
                        $loi['giatien'] = 'Giá tiền không được để trống!';
                    }
                    if ($email == '') {
                        $loi['email'] = 'Email không được để trống!';
                    }
                    if ($tongtien == '') {
                        $loi['tongtien'] = 'Trạng thái không được để trống!';
                    }

                    if (!$loi) {
                        // su dung function da co de su dung 
                        $db->update(
                            'oder',
                            array(
                                'full_name' => $hoten,
                                'address' => $diachi,
                                'phone' => $sodt,
                                'amount' => $giatien,
                                'email' => $email,
                                'status' => $tongtien
                            ),
                            array('id' => $id)
                        );
                        // chuyen huong nguoi dung
                        header('location: ?controller=trangchu');
                    }
                }
                require './view/v_suadonhang.php';
                break;
            case 'xoadh':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $db->delete('oder', array('id' => $id));
                // chuyen huong nguoi dung
                header('location: ?controller=trangchu');
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}
