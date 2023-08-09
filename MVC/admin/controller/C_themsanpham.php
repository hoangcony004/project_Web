<?php
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id_admin' => $_SESSION['ss_admin']));

    if ($user[0]['cap'] == 1) {
        $data_nhacungcap = $db->get('nhacungcap', array());
        
        if (isset($_POST['btn_themsp'])) {
            $catalog_id = $_POST['catalog_id'];
            $img_link = $_FILES['img_link'];
            $tensp = $_POST['tensp'];
            $soluong = $_POST['soluong'];
            $gia = $_POST['gia'];
            $mota = $_POST['mota'];

            // khai bao loi
            $loi = array();
            if ($catalog_id == '') {
                $loi['catalog_id'] = 'Nhà cung cấp không được để trống!';
            }
            if ($img_link == '') {
                $loi['img_link'] = 'Ảnh không được để trống!';
            }
            if ($tensp == '') {
                $loi['tensp'] = 'Tên không được để trống!';
            }
            if ($soluong == '') {
                $loi['soluong'] = 'Số lượng không được để trống!';
            }
            if ($gia == '') {
                $loi['gia'] = 'Giá không được để trống!';
            }
            if ($mota == '') {
                $loi['mota'] = 'Mô tả không được để trống!';
            }
            // xu ly fie anh
            $link = 'img/';
            // tao duong dan upload len he thong
            $link_full = $link . basename($_FILES['img_link']['name']);
            $uploadOk = 1;
            move_uploaded_file($_FILES['img_link']['tmp_name'], $link_full);
            if ($_FILES["btn_themsp"]["size"] > 500) {

                $uploadOk = 0;
            }






            if (!$loi) {
                $db->insert('product', array(
                    'catalog_id' => $catalog_id,
                    'img_link' => $link_full,
                    'name' => $tensp,
                    'amount' => $soluong,
                    'price' => $gia,
                    'content' => $mota
                ));
                header('location: ?controller=danhsachsanpham');
            }
        }
    } else {
        echo '<script>alert("Bạn không có quyền")</script>';
    }
} else {
    header('location: ?controller=login');
}















require './view/v_themsanpham.php';
