<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] <= 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                $id = $_GET['id'];
                // $data_donhangg = $db->get('oder', array('id' => $id));
                $sanpham = $db->get('sanpham', array('id'=>$id));
                if (isset($_POST['btn_suasp'])) {
                    $idncc = $_POST['iddm'];
                    $iddm = $_POST['idncc'];
                    $tensp = $_POST['tensp'];
                    $anh = $_FILES['anh'];
                    $mota = $_POST['mota'];
                    $giamoi = $_POST['giamoi'];
                    $giacu = $_POST['giacu'];
                    $soluong = $_POST['soluong'];
                    $thit = $_POST['thit'];
                    $ca = $_POST['ca'];
                    $rau = $_POST['rau'];
                    $cu = $_POST['cu'];
                    $qua = $_POST['qua'];
                    $rauthom = $_POST['rauthom'];
                    $giavi = $_POST['giavi'];
                    $nguyenlieukhac = $_POST['nguyenlieukhac'];

                    //echo 'ten sp la: '.$tensp;

                    $loi = array();
                    if ($idncc == '') {
                        $loi['idncc'] = 'ID nhà cung cấp không được để trống!';
                    }
                    if ($iddm == '') {
                        $loi['iddm'] = 'ID danh mục không được để trống!';
                    }
                    if ($tensp == '') {
                        $loi['tensp'] = 'Tên sản phẩm không được để trống!';
                    }
                    if ($anh == '') {
                        $loi['anh'] = 'Ảnh không được để trống!';
                    }
                    if ($mota == '') {
                        $loi['mota'] = 'Giá tiền không được để trống!';
                    }
                    if ($giamoi == '') {
                        $loi['giamoi'] = 'Mô tả không được để trống!';
                    }
                    if ($giacu == '') {
                        $loi['giacu'] = 'Giá mới không được để trống!';
                    }
                    if ($soluong == '') {
                        $loi['soluong'] = 'Giá cũ không được để trống!';
                    }
                    if ($thit == '') {
                        $loi['thit'] = 'Thịt không được để trống!';
                    }
                    if ($ca == '') {
                        $loi['ca'] = 'Cá không được để trống!';
                    }
                    if ($rau == '') {
                        $loi['rau'] = 'Rau không được để trống!';
                    }
                    if ($cu == '') {
                        $loi['cu'] = 'Củ không được để trống!';
                    }
                    if ($qua == '') {
                        $loi['qua'] = 'Quả không được để trống!';
                    }
                    if ($rauthom == '') {
                        $loi['rauthom'] = 'Rau thơm không được để trống!';
                    }
                    if ($giavi == '') {
                        $loi['giavi'] = 'Gia vị không được để trống!';
                    }
                    if ($nguyenlieukhac == '') {
                        $loi['nguyenlieukhac'] = 'Nguyên liệu khác không được để trống!';
                    }

                    //Xử lý thêm file ảnh
                    $link = 'img/';
                    //Tạo đường dẫn upload lên hệ thống
                    $link_full = $link . basename($_FILES['anh']['name']);
                    $uploadOk = 1;

                    move_uploaded_file($_FILES['anh']['tmp_name'], $link_full);

                    if (!$loi) {
                        $db->update(
                            'sanpham',
                            array(
                                'id_nhacungcap' => $idncc,
                                'id_danhmuc' => $iddm,
                                'tensanpham' => $tensp,
                                'anhsanpham' => $link_full,
                                'mota' => $mota,
                                'giamoi' => $giamoi,
                                'giacu' => $giacu,
                                'soluong' => $soluong
                            ),
                            array('id' => $id)
                        );
                        $db->update('nguyenlieu', array(
                            'id_sanpham' => $id,
                            'thit' => $thit,
                            'ca' => $ca,
                            'rau' => $rau,
                            'cu' => $cu,
                            'qua' => $qua,
                            'rauthom' => $rauthom,
                            'giavi' =>$giavi,
                            'nguyenlieukhac'=>$nguyenlieukhac
                        ));
                        header('location: ?controller=danhsachsanpham');
                    }
                }
                require './view/V_xulysanpham.php';
                break;
            case 'xoasp':
                $id = $_GET['id'];
                $db->delete('sanpham', array('id' => $id));
                header('location: ?controller=danhsachsanpham');
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
//require './view/V_suasanpham.php';
header('location: ?controller=danhsachsanpham');
