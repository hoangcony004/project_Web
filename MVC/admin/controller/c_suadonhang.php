<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    $data_donhang = $db->get('oder', array());
    $data_dathang = $db->get('oder', array());
    $data_sanpham = $db->get('order_detail', array());



    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                $id = $_GET['id'];
                $data_donhangg = $db->get('oder', array('id' => $id));
                if (isset($_POST['btn_suadh'])) {
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $sodt = $_POST['sodt'];
                    $giatien = $_POST['giatien'];
                    $email = $_POST['email'];
                    $tongtien = $_POST['tongtien'];

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
                        header('location: ?controller=trangchu');
                    }
                }
                require './view/v_suadonhang.php';
                break;
            case 'xoadh':
                $id = $_GET['id'];
                $db->delete('oder', array('id' => $id));
                header('location: ?controller=trangchu');
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
