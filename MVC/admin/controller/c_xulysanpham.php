<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        // lay method tu url ve
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $sanpham = $db->get('sanpham', array('id'=>$id));
                $product_catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['nhacungcap_id']));
                $data_catalog = $db->get('nhacungcap',array());
                // lay du lieu tu o input nguoi dung nhap
                if (isset($_POST['btn_suasp'])) {
                    $idncc = $_POST['idncc'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $anh = $_FILES['anh'];
                    $mota = $_POST['mota'];
                    $giamoi = $_POST['giamoi'];
                    $giacu = $_POST['giacu'];
                    $soluong = $_POST['soluong'];
                    $thit = $_POST['thit'];
                    $nguyenlieu = $_POST['nguyenlieu'];

                    // khai bao loi
                    $loi = array();
                    if ($idncc == '') {
                        $loi['idncc'] = 'Nhà cung cấp ID không được để trống!';
                    }
                    if ($iddm == '') {
                        $loi['iddm'] = 'Danh mục ID không được để trống!';
                    }
                    if ($tensp == '') {
                        $loi['tensp'] = 'Tên sản phẩm không được để trống!';
                    }
                    if ($anh == '') {
                        $loi['anh'] = 'Ảnh không được để trống!';
                    }
                    if ($mota == '') {
                        $loi['mota'] = 'Mô tả không được để trống!';
                    }
                    if ($giamoi == '') {
                        $loi['giamoi'] = 'Giá mới không được để trống!';
                    }
                    if ($giacu == '') {
                        $loi['giacu'] = 'Giá cũ không được để trống!';
                    }
                    if ($soluong == '') {
                        $loi['soluong'] = 'Số lượng không được để trống!';
                    }

                    //Xử lý thêm file ảnh
                    $link = 'img/';
                    //Tạo đường dẫn upload lên hệ thống
                    $link_full = $link . basename($_FILES['anh']['name']);
                    $uploadOk = 1;

                    move_uploaded_file($_FILES['anh']['tmp_name'], $link_full);

                    if (!$loi) {
                        // su dung function da co de su dung 
                        $db->update(
                            'sanpham',
                            array(
                                'nhacungcap_id' => $idncc,
                                'danhmuc_id' => $iddm,
                                'tensanpham' => $tensp,
                                'anhsanpham' => $link_full,
                                'mota' => $mota,
                                'giamoi' => $giamoi,
                                'giacu' => $giacu,
                                'soluong' => $soluong,
                                'nguyenlieu' => $nguyenlieu
                            ),
                        array('id' => $id)
                        );
                        // chuyen huong nguoi dung
                        header('location: ?controller=danhsachsanpham');
                    }
                }
                require './view/V_xulysanpham.php';
                break;
            case 'xoasp':
                // lay id tu url ve 
                $id = $_GET['id'];
                // su dung function da co de su dung 
                $db->delete('sanpham', array('id' => $id));
                // chuyen huong nguoi dung
                header('location: ?controller=danhsachsanpham');
                break;
        }
    } else {
        // hien thi thong bao
        echo '<script>alert("Bạn không có quyền")</script>';
    }
}else {
    // chuyen huong nguoi dung
    header('location: ?controller=dangnhap');
}

