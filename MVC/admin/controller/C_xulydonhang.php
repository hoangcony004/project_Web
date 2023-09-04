<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'duyet':
                $id = $_GET['id'];
                $oder = $db->get('donhang', array('id' => $id));
                $chitietdonhang = $db->get('chitietdonhang', array('donhang_id' => $id));
                // lap lay donhang_id
                foreach ($chitietdonhang as $key => $value) {
                    $donhang_id = $value['donhang_id'] ;
                }
                // echo 'id la'.$donhang_id;
                // die;
                $db->update('donhang', array('trangthai' => 1), array('id' => $id));
                // $db->update('sanpham', array(
                //     'soluong' => -1,
                    
                // ),array('id'=> $id));








                header('location: ?controller=donhang');
                //require './view/v_trangchu-admin1.php';
                break;
            case 'xoa':
                $id = $_GET['id'];
                $db->delete('donhang', array('id' => $id));
                header('location: ?controller=donhang');
                break;
            case 'sua':
                $id = $_GET['id'];
                $donhang = $db->get('donhang', array('id' => $id));
                if (isset($_POST['btn_xulydonhang'])) {
                    $hovaten = $_POST['hovaten'];
                    $email = $_POST['email'];
                    $sodt = $_POST['sodt'];
                    $tinhthanh = $_POST['tinhthanh'];
                    $quanhuyen = $_POST['quanhuyen'];
                    $xaphuong = $_POST['xaphuong'];
                    $tongtien = $_POST['tongtien'];
                    $thonxom = $_POST['thonxom'];
                    $trangthai = 0;


                    $loi = array();
                    if ($hovaten == '') {
                        $loi['hovaten'] = 'Họ và tên không được để trống!';
                    }
                    if ($email == '') {
                        $loi['email'] = 'Email không được để trống!';
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
                        $db->update('donhang', array(
                            'hovaten' => $hovaten,
                            'sodienthoai' => $sodt,
                            'email' => $email,
                            'tinh_thanh' => $tinhthanh,
                            'quan_huyen' => $quanhuyen,
                            'xa_phuong' => $xaphuong,
                            'thon_xom' => $thonxom,
                            'tongtien' => $tongtien,
                        ),array('id'=> $id)
                    );
                        header('location: ?controller=donhang');
                    }
                }
                require './view/V_xulydonhang.php';
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
