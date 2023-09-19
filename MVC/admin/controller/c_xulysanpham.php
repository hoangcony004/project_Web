<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                $id = $_GET['id'];
                // $data_donhangg = $db->get('oder', array('id' => $id));
                $sanpham = $db->get('sanpham', array('id'=>$id));
                $product_catalog = $db->get('nhacungcap',array('id'=>$sanpham[0]['nhacungcap_id']));
                $data_catalog = $db->get('nhacungcap',array());
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

                    //echo 'ten sp la: '.$tensp;

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
//header('location: ?controller=danhsachsanpham');
