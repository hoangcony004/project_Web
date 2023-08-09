<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin_nhanvien', array('id' => $_SESSION['ss_admin']));
    $data_sanpham = $db->get('product', array());
    if ($user[0]['level'] == 1) {
        $method = $_GET['method'];
        switch ($method) {
            case 'sua':
                $id = $_GET['id'];
                $data_sanpham = $db->get('product', array('id' => $id));
                if (isset($_POST['btn_suasp'])) {
                    $catalog_id = $_POST['catalog_id'];
                    $img_link = $_FILES['img_link'];
                    $tensp = $_POST['tensp'];
                    $soluong = $_POST['soluong'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];

                    $loi = array();
                    if ($catalog_id == '') {
                        $loi['catalog_id'] = 'Catalog_id không được để trống!';
                    }
                    if ($img_link == '') {
                        $loi['img_link'] = 'Ảnh không được để trống!';
                    }
                    if ($tensp == '') {
                        $loi['tensp'] = 'Tên sản phẩm không được để trống!';
                    }
                    if ($soluong == '') {
                        $loi['soluong'] = 'Só lượng không được để trống!';
                    }
                    if ($gia == '') {
                        $loi['gia'] = 'Giá không được để trống!';
                    }
                    if ($mota == '') {
                        $loi['mota'] = 'Ghi chú không được để trống!';
                    }
                    // xu ly fie anh
                    $link = 'img/';
                    // tao duong dan upload len he thong
                    $link_full = $link . basename($_FILES['img_link']['name']);
                    $uploadOk = 1;
                    move_uploaded_file($_FILES['img_link']['tmp_name'], $link_full);



                    if (!$loi) {
                        $db->update(
                            'product',
                            array(
                                'catalog_id' => $catalog_id,
                                'img_link' => $link_full,
                                'name' => $tensp,
                                'amount' => $soluong,
                                'price' => $gia,
                                'content' => $mota
                            ),
                            array('id' => $id)
                        );
                        header('location: ?controller=dssanpham');
                    }
                }
                require './view/v_suasp.php';
                break;
            case 'xoasp':
                $id = $_GET['id'];
                $db->delete('product', array('id' => $id));
                header('location: ?controller=dssanpham');
                break;
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
        //header('location: ?controller=dsnhanvien');
    }
}
