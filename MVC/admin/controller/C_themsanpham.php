<?php
// kiem tra dang nhap
if (isset($_SESSION['ss_admin'])) {
    $user = $db->get('admin', array('id' => $_SESSION['ss_admin']));
    // su dung mang 2 chieu kiem tra xem tai khoan co quyen khong
    if ($user[0]['cap'] == 1) {
        $data_nhacungcap = $db->get('nhacungcap', array());
        // lay du lieu tu o input nguoi dung nhap 
        if (isset($_POST['btn_themsp'])) {
            $idncc = $_POST['idncc'];
            $iddm = $_POST['iddm'];
            $tensp = $_POST['tensp'];
            $anh = $_FILES['anh'];
            $mota = $_POST['mota'];
            $giamoi = $_POST['giamoi'];
            $giacu = $_POST['giacu'];
            $soluong = $_POST['soluong'];
            $nguyenlieu = $_POST['nguyenlieu'];
            $id_sanpham = 1;

            // khai bao loi
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
            // xu ly fie anh
            $link = 'img/';
            // tao duong dan upload len he thong
            $link_full = $link . basename($_FILES['anh']['name']);
            $uploadOk = 1;
            move_uploaded_file($_FILES['anh']['tmp_name'], $link_full);

            if (!$loi) {
                // su dung function da co de su dung 
                $db->insert('sanpham', array(
                    'nhacungcap_id' => $idncc,
                    'danhmuc_id' => $iddm,
                    'tensanpham' => $tensp,
                    'anhsanpham' => $link_full,
                    'mota' => $mota,
                    'giamoi' => $giamoi,
                    'giacu' => $giacu,
                    'nguyenlieu' => $nguyenlieu,
                    'soluong' =>$soluong
                ));
                // chuyen huong nguoi dung
                header('location: ?controller=danhsachsanpham');
               
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
require './view/v_themsanpham.php';
